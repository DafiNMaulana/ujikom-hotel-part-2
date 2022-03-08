<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <input type="hidden" value="{{ $admin->id }}" name="id" id="id_data"/>
            <label for="name">Username</label>
            <input type="text" name="username" class="form-control" value="{{ $admin->username }}" id="name_create" required autofokus @error('username') style="border: 1px solid red;" @enderror/>
            <label @error('username') class="text-danger" @enderror> @error('username') {{ $message }} @enderror</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label for="description">Password</label>
            <input type="password" name="password" class="form-control" id="pass_create" required autofokus @error('password') style="border: 1px solid red;" @enderror/>
            <label @error('password') class="text-danger" @enderror> @error('password') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="description">Level</label>
            <select name="level" class="form-control" style="cursor: pointer;">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select>
            <label @error('level') class="text-danger" @enderror> @error('level') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="description">Konfirmasi Password</label>
            <input type="password" name="pw_confirmation" class="form-control" id="confir" required autofokus @error('password') style="border: 1px solid red;" @enderror/>
            <label @error('password') class="text-danger" @enderror> @error('password') {{ $message }} @enderror</label>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="description">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $admin->nama }}" id="nama" required autofokus @error('nama') style="border: 1px solid red;" @enderror/>
            <label @error('nama') class="text-danger" @enderror> @error('nama') {{ $message }} @enderror</label>
        </div>
    </div>
</div>
