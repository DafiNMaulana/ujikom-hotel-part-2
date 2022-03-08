{{-- create --}}
<div class="modal fade" id="create_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Fasilitas Hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="create_fasilitas" action="{{ route('manage-fasilitas-hotel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Fasilitas</label>
                                <input type="text" onkeydown="return/[a-z0-9 ]/i.test(event.key)" name="nama_fasilitas_hotel" class="form-control" id="fasilitas_create" required autofokus @error('nama_fasilitas_hotel') style="border: 1px solid red;" @enderror/>
                                <label @error('nama_fasilitas_hotel') class="text-danger" @enderror> @error('nama_fasilitas_hotel') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Foto Fasilitas</label>
                                <input type="file" name="foto_fasilitas_hotel" class="form-control" id="img_create" required autofokus @error('foto_fasilitas_hotel') style="border: 1px solid red;" @enderror/>
                                <label @error('foto_fasilitas_hotel') class="text-danger" @enderror> @error('foto_fasilitas_hotel') {{ $message }} @enderror</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description">Keterangan</label>
                                <textarea name="deskripsi_fasilitas_hotel" @error('deskripsi_fasilitas_hotel') style="border: 1px solid red; height:100px;" @enderror class="form-control" id="keterangan" required autofokus style="height: 100px"></textarea>
                                <label @error('deskripsi_fasilitas_hotel') class="text-danger" @enderror> @error('deskripsi_fasilitas_hotel') {{ $message }} @enderror</label>
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


