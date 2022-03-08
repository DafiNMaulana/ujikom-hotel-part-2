<div class="row">
    <div class="col-6  d-flex align-item-center">
        <img class="img-fluid" style="border-radius: 10px;" src="{{ asset('/img/fasilitas_hotel/'. $fasilitas->foto_fasilitas_hotel ) }}" alt="foto fasilitas">
    </div>
    <div class="col-6">
        <div class="col-lg-12">
          <label for="quantity"><b>Nama Kamar</b></label>
          <input type="text" name="" value="{{ $fasilitas->nama_fasilitas_hotel }}" class="form-control" id="quantity" placeholder="" disabled>
        </div>
        <br>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="description">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="keterangan" required disabled style="height: 100px">{{ $fasilitas->deskripsi_fasilitas_hotel }}</textarea>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
  <div class="col-lg-4">
    <label for="material"><b>Waktu data ditambahkan</b></label>
    <input type="text" name="" class="form-control" id="material" placeholder="" value="{{ $fasilitas->created_at->toDateString() }}" disabled>
  </div>
  <div class="col-lg-4">
    <label for="material"><b>Waktu data diperbarui</b></label>
    <input type="text" name="" class="form-control" id="material" placeholder="" value="{{ $fasilitas->updated_at->toDateString() }}" disabled>
  </div>
</div>
