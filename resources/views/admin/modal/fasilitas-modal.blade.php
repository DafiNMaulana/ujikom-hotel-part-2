{{-- create --}}
<div class="modal fade" id="create_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Fasilitas Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="create_kamar" action="{{ route('kamar.fasilitas.store', ['kamar'=>$kamar->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Kasur</label>
                                <input type="text" placeholder="King bed" name="nama_kasur" onkeydown="return/[a-z 1-9]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('nama_kasur') style="border: 1px solid red;" @enderror/>
                                <label @error('nama_kasur') class="text-danger" @enderror> @error('nama_kasur') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Kapasitas ruangan</label>
                                <input type="text" placeholder="Max person 5" name="kapasitas_ruangan" onkeydown="return/[a-z 0-9]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('kapasitas_ruangan') style="border: 1px solid red;" @enderror/>
                                <label @error('kapasitas_ruangan') class="text-danger" @enderror> @error('kapasitas_ruangan') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Ukuran ruangan</label>
                                <input type="text" placeholder="30 ft" name="ukuran_ruangan" onkeydown="return/[a-z 0-9]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('ukuran_ruangan') style="border: 1px solid red;" @enderror/>
                                <label @error('ukuran_ruangan') class="text-danger" @enderror> @error('ukuran_ruangan') {{ $message }} @enderror</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Fasilitas</label>
                                <input type="text" placeholder="Tv, Wifi, Bathub premium. (harus diakhiri titik)" name="nama_fasilitas" onkeydown="return/[a-z ,./]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('nama_fasilitas') style="border: 1px solid red;" @enderror/>
                                <label @error('nama_fasilitas') class="text-danger" @enderror> @error('nama_fasilitas') {{ $message }} @enderror</label>
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
                <h5 class="modal-title" id="staticBackdropLabel">Detail Fasilitas</h5>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="update_fasilitas" id="update-form" action="" method="post">
                @method('patch')
                @csrf
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success" id="btn-update">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
