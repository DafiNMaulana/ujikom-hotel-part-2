{{-- create --}}
<div class="modal fade" id="create_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="create_kamar" action="{{ route('manage-kamar.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Kamar</label>
                                <input type="text" name="nama_kamar" class="form-control" id="name_create" required autofokus @error('nama_kamar') style="border: 1px solid red;" @enderror/>
                                <label @error('nama_kamar') class="text-danger" @enderror> @error('nama_kamar') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Foto kamar</label>
                                <input type="file" name="foto_kamar" class="form-control" id="img_create" required autofokus @error('foto_kamar') style="border: 1px solid red;" @enderror/>
                                <label @error('foto_kamar') class="text-danger" @enderror> @error('foto_kamar') {{ $message }} @enderror</label>
                                <span for="img_create" class="text-secondary" style="font-size: 13px">Foto harus berupa png, jpg, png, jpeg dengan ukuran min lebar=370, min tinggi=240,maks lebar=400,maks tinggi=270</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Jumlah Kamar</label>
                                <input type="number" name="jumlah_kamar" class="form-control" id="jumlah_create" required autofokus @error('jumlah_kamar') style="border: 1px solid red;" @enderror/>
                                <label @error('jumlah_kamar') class="text-danger" @enderror> @error('jumlah_kamar') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <label for="price"><b>Harga Kamar</b></label>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Rp.</span>
                            </div>
                            <input type="text" name="harga_kamar"  id="harga_create" class="form-control"  required autofokus @error('harga_kamar') style="border: 1px solid red;" @enderror />
                            <label @error('harga_kamar') class="text-danger" @enderror> @error('harga_kamar') {{ $message }} @enderror</label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description">Keterangan</label>
                                <textarea name="keterangan" class="form-control" id="keterangan" required autofokus style="height: 100px"></textarea>
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
                <h5 class="modal-title" id="staticBackdropLabel">Detail Kamar</h5>
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


