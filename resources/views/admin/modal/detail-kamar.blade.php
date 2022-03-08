<div class="row">
    <div class="col-6  d-flex align-item-center">
        <img class="img-fluid" style="border-radius: 10px;" src="{{ asset('/img/kamar/'. $kamar->foto_kamar ) }}" alt="foto kamar">
    </div>
    <div class="col-6">
        <div class="col-lg-12">
          <label for="quantity"><b>Nama Kamar</b></label>
          <input type="text" name="" value="{{ $kamar->nama_kamar }}" class="form-control" id="quantity" placeholder="" disabled>
        </div>
        <br>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="description">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="keterangan" required disabled style="height: 100px">{{ $kamar->keterangan }}</textarea>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
  <div class="col-lg-4">
    <label for="quantity"><b>Kamar Tersedia</b></label>
    <input type="text" name="" value="{{ $kamar->jumlah_kamar }}" class="form-control" id="quantity" placeholder="" disabled>
  </div>
  <div class="col-lg-4">
    <label for="price"><b>Harga</b></label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Rp.</span>
      </div>
      <input type="text" id="price" value="{{ $kamar->harga_kamar }}" class="form-control" placeholder="" disabled>
    </div>
  </div>
  <div class="col-lg-4">
    <label for="material"><b>Waktu data ditambahkan</b></label>
    <input type="text" name="" class="form-control" id="material" placeholder="" value="{{ $kamar->created_at->toDateString() }}" disabled>
  </div>
</div>
