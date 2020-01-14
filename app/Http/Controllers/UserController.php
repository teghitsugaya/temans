<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        
        // log activity
        activity()
        ->log('Akses Menu User');

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::orderBy('name', 'ASC')->get();
        return view('users.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|string|exists:roles,name'
        ]);

        $user = User::firstOrCreate([
            'email' => $request->email
        ], [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'id_status' => 1
        ]);

        $user->assignRole($request->role);

        // log activity
        activity()
        ->log('Tambah User Baru '.$request->name);

        return redirect(route('users.index'))->with(['success' => 'User: <strong>' . $user->name . '</strong> Berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        try {
            $user = User::findOrFail(Crypt::decryptString($user));
            $roles = Role::orderBy('name', 'ASC')->get();
            
            return view('users.edit', compact('user', 'roles'));

        } catch (DecryptException $e) {
            abort(404, 'Data Not Found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        try {
            $this->validate($request, [
                'name' => 'required|string|max:100',
                'email' => 'required|email|exists:users,email',
                'password' => 'nullable|min:6',
            ]);
            
            $user = User::findOrFail(Crypt::decryptString($user));
            $password = !empty($request->password) ? bcrypt($request->password):$user->password;
            $user->update([
                'name' => $request->name,
                'password' => $password,
            ]);
            
            // log activity
            activity()
            ->log('Update User '.$request->name);
            
            if(Auth::user()->hasRole('Admin')){
                return redirect(route('users.index'))->with(['success' => 'User: <strong>' . $user->name . '</strong> Berhasil Diperbaharui']);
            }else{
                return redirect()->back()->with(['success' => 'User: <strong>' . $user->name . '</strong> Berhasil Diperbaharui']);
            }

        } catch (DecryptException $e) {
            abort(404, 'Data Not Found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        try {
            $user = User::findOrFail(Crypt::decryptString($user));
            $user->delete();

            // log activity
            activity()
            ->log('Hapus User '.$user->name);

            return redirect()->back()->with(['danger' => 'User: <strong>' . $user->name . '</strong> Berhasil Dihapus']);

        } catch (DecryptException $e) {
            abort(404, 'Data Not Found');
        }
    }

    /**
     * Get user roles.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function roles(Request $request, $user)
    {
        try {
            $user = User::findOrFail(Crypt::decryptString($user));
            $roles = Role::all()->pluck('name');

            return view('users.roles', compact('user', 'roles'));

        } catch (DecryptException $e) {
            abort(404, 'Data Not Found');
        }
    }

    /**
     * Set user roles.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function setRole(Request $request, $user)
    {
        try {
            $this->validate($request, [
                'role' => 'required'
            ]);
    
            $user = User::findOrFail(Crypt::decryptString($user));
            $user->syncRoles($request->role);
    
            // log activity
            activity()
            ->log('Update Role User '.$user->name.' Menjadi '.$request->role);
            
            return redirect()->back()->with(['success' => 'Role '. $user->name .' Berhasil Disetting']);

        } catch (DecryptException $e) {
            abort(404, 'Data Not Found');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User
     * @return \Illuminate\Http\Response
     */
    public function showChangePasswordForm()
    {
        return view('auth.changepassword');
    }

    /**
     * Change password user from database.
     *
     * @param  \App\User  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Kata sandi Anda saat ini tidak cocok dengan kata sandi yang Anda berikan. Silakan coba lagi.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Kata sandi baru tidak boleh sama dengan kata sandi Anda saat ini. Silakan pilih kata sandi yang berbeda.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        // log activity
        activity()
        ->log('Update Password '.Auth::user()->name);

        return redirect()->back()->with("success","Kata sandi berhasil diubah !");
    }

    /**
     * Set Permission Role.
     *
     * @param  \App\Role  $request
     * @return \Illuminate\Http\Response
     */
    public function rolePermission(Request $request)
    {
        $role = $request->get('role');

        //Default, set dua buah variable dengan nilai null
        $permissions = null;
        $hasPermission = null;

        //Mengambil data role
        $roles = Role::all()->pluck('name');

        //apabila parameter role terpenuhi
        if (!empty($role)) {
            //select role berdasarkan namenya, ini sejenis dengan method find()
            $getRole = Role::findByName($role);

            //Query untuk mengambil permission yang telah dimiliki oleh role terkait
            $hasPermission = DB::table('role_has_permissions')
                ->select('permissions.name')
                ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                ->where('role_id', $getRole->id)->get()->pluck('name')->all();

            //Mengambil data permission
            $permissions = Permission::all()->pluck('name');
        }
        return view('users.role_permission', compact('roles', 'permissions', 'hasPermission'));
    }

    /**
     * Handle request form data permission.
     *
     * @param  \App\Permission  $request
     * @return \Illuminate\Http\Response
     */
    public function addPermission(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|string|unique:permissions'
      ]);

      $permission = Permission::firstOrCreate([
          'name' => $request->name
      ]);

       // log activity
       activity()
       ->log('Tambah Role Permision '.$request->name);
        
      return redirect()->back();
    }

    /**
     * Handle setRolePermission.
     *
     * @param  \App\Permission  $request
     * @return \Illuminate\Http\Response
     */
    public function setRolePermission(Request $request, $role)
    {
        //select role berdasarkan namanya
        $role = Role::findByName($role);

        //fungsi syncPermission akan menghapus semua permissio yg dimiliki role tersebut
        //kemudian di-assign kembali sehingga tidak terjadi duplicate data
        $role->syncPermissions($request->permission);
        
         // log activity
         activity()
         ->log('Set Role Permision '.$role->name);

        return redirect()->back()->with(['success' => 'Set Permission untuk Role Tersimpan!']);
    }
}
