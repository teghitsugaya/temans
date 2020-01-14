<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" value="{{ !empty($user->name) ? $user->name : '' }}" placeholder="Nama" required autofocus>
            <p class="text-danger">{{ $errors->first('name') }}</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}"  value="{{ !empty($user->email) ? $user->email : '' }}" placeholder="Email" required>
            <p class="text-danger">{{ $errors->first('email') }}</p>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}"  placeholder="Password" @if(empty($user->password)) required @endif>
            <p class="text-danger">{{ $errors->first('password') }}</p>
            @if(empty($user->password))
            <small class="form-text text-muted">Kosongkan jika tidak akan mengubahnya.</small>
            @endif
        </div>
    </div>
    @if(!empty($role))
    <div class="col-md-6">
        <div class="form-group">
            <label>Role</label>
            <select name="role" class="form-control {{ $errors->has('role') ? 'is-invalid':'' }}" required>
                <option value="">Pilih</option>
                @foreach ($role as $row)
                <option value="{{ $row->name }}">{{ $row->name }}</option>
                @endforeach
            </select>
            <p class="text-danger">{{ $errors->first('role') }}</p>
        </div>
    </div>
    @endif
</div>