{{-- create --}}
<div class="modal fade" id="create_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="create_admin" action="{{ route('manage-admin.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" name="username" onkeydown="return/[a-z0-9._]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('username') style="border: 1px solid red;" @enderror/>
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
                                <input type="text" name="nama" class="form-control" id="nama" required autofokus @error('nama') style="border: 1px solid red;" @enderror/>
                                <label @error('nama') class="text-danger" @enderror> @error('nama') {{ $message }} @enderror</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="add">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- detail --}}
<div class="modal fade" id="detail_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Admin</h5>
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
            </div>
        </div>
    </div>
</div>

{{-- edit --}}
<div class="modal fade" id="edit_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ubah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="update_admin" id="update-form" action="{{ route('manage-admin.store') }}" method="post">
                @method('post')
                @csrf
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btn-update">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


