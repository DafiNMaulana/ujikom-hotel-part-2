{{-- create --}}
<div class="modal fade" id="create_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Pemesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="create_pemesanan" action="{{ route('manage-pemesanan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Nama Pemesan</label>
                                <input type="text" name="nama_pemesan" class="form-control" id="pemesan_name" required autofokus @error('nama_pemesan') style="border: 1px solid red;" @enderror/>
                                <label @error('nama_pemesan') class="text-danger" @enderror> @error('nama_pemesan') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Nama Tamu</label>
                                <input type="text" name="nama_tamu" class="form-control" id="name_create" required autofokus @error('nama_tamu') style="border: 1px solid red;" @enderror/>
                                <label @error('nama_tamu') class="text-danger" @enderror> @error('nama_tamu') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Email Pemesan</label>
                                <input type="email" name="email_pemesan" class="form-control" id="name_create" required autofokus @error('email_pemesan') style="border: 1px solid red;" @enderror/>
                                <label @error('email_pemesan') class="text-danger" @enderror> @error('email_pemesan') {{ $message }} @enderror</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Tanggal Checkin</label>
                                <input type="date" name="tanggal_checkin" class="form-control" id="pemesan_name" required autofokus @error('tanggal_checkin') style="border: 1px solid red;" @enderror/>
                                <label @error('tanggal_checkin') class="text-danger" @enderror> @error('tanggal_checkin') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Tanggal Checkout</label>
                                <input type="date" name="tanggal_checkout" class="form-control" id="name_create" required autofokus @error('tanggal_checkout') style="border: 1px solid red;" @enderror/>
                                <label @error('tanggal_checkout') class="text-danger" @enderror> @error('tanggal_checkout') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Tanggal Di pesan</label>
                                <input type="date" name="tanggal_pesan" class="form-control" id="name_create" required autofokus @error('tanggal_pesan') style="border: 1px solid red;" @enderror/>
                                <label @error('tanggal_pesan') class="text-danger" @enderror> @error('tanggal_pesan') {{ $message }} @enderror</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">Jumlah kamar di pesan</label>
                                <input type="text" onkeydown="return/[0-9]/i.test(event.key)" name="jumlah_kamar_dipesan" class="form-control" id="pemesan_name" required autofokus @error('jumlah_kamar_dipesan') style="border: 1px solid red;" @enderror/>
                                <label @error('jumlah_kamar_dipesan') class="text-danger" @enderror> @error('jumlah_kamar_dipesan') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="description">Status pemesanan</label>
                                <select name="status_pemesan" class="form-control" style="cursor: pointer;">
                                    <option value="pesan">pesan</option>
                                    <option value="checkin">checkin</option>
                                    <option value="checkout">checkout</option>
                                    <option value="batal">batal</option>
                                </select>
                                <label @error('status_pemesan') class="text-danger" @enderror> @error('status_pemesan') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name">No Hp pemesan</label>
                                <input type="text"  onkeydown="return/[0-9]/i.test(event.key)" name="no_hp" class="form-control" id="name_create" required autofokus @error('no_hp') style="border: 1px solid red;" @enderror/>
                                <label @error('no_hp') class="text-danger" @enderror> @error('no_hp') {{ $message }} @enderror</label>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Pemesanan</h5>
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">

                </div>
        </div>
    </div>
</div>


{{-- edit --}}
<div class="modal fade" id="edit_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="update_pemesanan" id="update-form" action="{{ route('manage-pemesanan.store') }}" method="post">
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


