<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/run/python/image','RunPythonController@index');

Route::get('/welcome', function () { return view('welcome'); });
Route::get('/blank', function () { return view('blank'); });

Auth::routes();

Route::prefix('home')->group(function () {
    $c = 'HomeController';
    Route::get('/',                         $c.'@index')->name('home');
    Route::get('/dokumentasi',              $c.'@dokumentasi')->name('home.dokumentasi');
    Route::get('/tentang',                  $c.'@tentang')->name('home.tentang');
    Route::get('/viewall',                  $c.'@viewall');
});

// Change Password
Route::get('/changePassword','UserController@showChangePasswordForm');
Route::post('/changePassword','UserController@changePassword')->name('changePassword');

// Route Middleware Auth
Route::group(['middleware' => 'auth'], function() {

    // Role Admin
    Route::group(['middleware' => ['role:Admin']], function () {

        // Activity Log
        Route::get('activity-log',          'ActivityLogController@index');

        // Route Role
        Route::prefix('role')->group(function () {
            $c = 'RoleController';

            Route::post('/',          		 $c.'@store')->name('role.store');
            Route::get('/',           		 $c.'@index')->name('role.index');
            Route::delete('{id}',            $c.'@destroy')->name('role.destroy');    
        });

        // Route User
        Route::prefix('users')->group(function () {
            $c = 'UserController';

            Route::get('/',          		 $c.'@index')->name('users.index');
            Route::post('store',             $c.'@store')->name('users.store');          
            Route::get('create',             $c.'@create')->name('users.create');          
            Route::post('permission',        $c.'@addPermission')->name('users.add_permission');   
            Route::put('permission/{role}',  $c.'@setRolePermission')->name('users.setRolePermission');
            Route::get('role-permission',    $c.'@rolePermission')->name('users.roles_permission'); 
            Route::get('roles/{id}',         $c.'@roles')->name('users.roles');            
            Route::put('roles/{id} ',        $c.'@setRole')->name('users.set_role');         
            Route::get('{id}',           	 $c.'@show')->name('users.show');             
            Route::put('update/{id}',        $c.'@update')->name('users.update');           
            Route::delete('{id}',            $c.'@destroy')->name('users.destroy');          
            Route::get('edit/{id}',          $c.'@edit')->name('users.edit');
            Route::get('show/{id}',          $c.'@show')->name('users.show');
        });

       
    });
    
    //Permision Create|Update|Delete
    Route::group(['middleware' => ['permission:Create|Update|Delete']], function () {

    });

    // Permision Read
    Route::group(['middleware' => ['permission:Read']], function () {
        // Curriculum Vitae
        Route::prefix('curriculum-vitae')->group(function () {
            $c = 'CurriculumVitaeController';

            Route::get('/',                          $c.'@index');
            Route::get('show/{id}',                  $c.'@show');
            Route::get('create',                     $c.'@create');
            Route::post('store',                     $c.'@store');
            Route::get('edit/{id}',                  $c.'@edit');
            Route::put('update/{id}',                $c.'@update');
            Route::delete('/{id}',                   $c.'@destroy');
            
            //delete item curriculum viate
            Route::get('interest/{id}',                 $c.'@destroyInterest');
            Route::get('riwayat-jabatan/{id}',          $c.'@destroyRiwayatJabatan');
            Route::get('keanggotaan-organisasi/{id}',   $c.'@destroyKeanggotaanOrganisasi');
            Route::get('penghargaan/{id}',              $c.'@destroyPenghargaan');
            Route::get('riwayat-pendidikan/{id}',       $c.'@destroyRiwayatPendidikan');
            Route::get('riwayat-pelatihan/{id}',        $c.'@destroyRiwayatPelatihan');
            Route::get('karya-tulis/{id}',              $c.'@destroyKaryaTulis');
            Route::get('pengalaman-narasumber/{id}',    $c.'@destroyPengalamanNarasumber');
            Route::get('referensi/{id}',                $c.'@destroyReferensi');
            Route::get('keterangan-keluarga/{id}',      $c.'@destroyKeteranganKeluarga');
        });

        Route::prefix('performance')->group(function () {
            $c = 'PerformanceController';
            Route::get('/',                     $c.'@index');
            Route::post('/import',              $c.'@import')->name('performance.import');
            Route::get('/export',               $c.'@export')->name('performance.export');
        });

        Route::prefix('assessment')->group(function () {
            $c = 'AssessmentController';
            Route::get('/',                     $c.'@index');
            Route::get('/detail/{npp}',         $c.'@detail');
            Route::get('/destroy/{id}',         $c.'@destroy');
            Route::post('/store',               $c.'@store');
            Route::post('/import',              $c.'@import')->name('assessment.import');
            Route::get('/export',               $c.'@export')->name('assessment.export');
            Route::post('/upload/image',        $c.'@uploadimage');
            Route::post('/upload/resume',       $c.'@uploadresume');
            Route::post('/upload/uploadfile',   $c.'@uploadfile');
            Route::post('/download/downloadfile',$c.'@downloadfile');
        });

        Route::prefix('development')->group(function () {
            $c = 'DevelopmentProgramController';
            Route::get('/',                     $c.'@index');
            Route::get('/approve/{id}',         $c.'@update');
            Route::get('/disapprove/{id}',      $c.'@update2');
            Route::get('/show',                 $c.'@show');
            Route::post('/store',               $c.'@store');
            Route::post('/edit',                $c.'@edit');
            Route::get('/destroy/{id}',         $c.'@destroy');
            Route::get('/downloadimage/{id}',   $c.'@downloaddevelopmentimage');
            Route::get('/downloadresume/{id}',  $c.'@downloaddevelopmentresume');
        });
    });

});
