<div class="row">
    <div class="col-lg-6">
      <label for="item_code"><b>Nama Kasur</b></label>
      <input type="text" class="form-control" id="item_code" value="{{ $fasilitas->nama_kasur }}" disabled>
    </div>
    <div class="col-lg-6">
      <label for="item_code"><b>Kapasitas Ruangan</b></label>
      <input type="text" class="form-control" id="item_code" value="{{ $fasilitas->kapasitas_ruangan }}" disabled>
    </div>
    <div class="col-lg-12">
      <label for="item_code"><b>Ukuran Ruangan</b></label>
      <input type="text" class="form-control" id="item_code" value="{{ $fasilitas->ukuran_ruangan }}" disabled>
    </div>
    <div class="col-lg-12">
      <label for="item_code"><b>Nama Fasilitas</b></label>
      <textarea name="keterangan" class="form-control" id="item_code" required autofokus style="height: 100px" disabled>{{ $fasilitas->nama_fasilitas_kamar }}</textarea>
    </div>
  </div>
   <hr>
  <div class="row">
    <div class="col-lg-6">
      <label for="material"><b>Waktu data ditambahkan</b></label>
      <input type="text" class="form-control" id="material" placeholder="" value="{{ $fasilitas->created_at->toDateString() }}" disabled>
    </div>
    <div class="col-lg-6">
      <label for="brand"><b>Waktu data diperbarui</b></label>
      <input type="text" class="form-control" id="brand" placeholder="" value="{{ $fasilitas->updated_at->toDateString() }}" disabled>
    </div>
  </div>
</div>
