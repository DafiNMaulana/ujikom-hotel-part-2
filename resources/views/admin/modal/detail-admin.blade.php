<div class="row">
    <div class="col-lg-12">
      <label for="item_code"><b>Username</b></label>
      <input type="text" name="" class="form-control" id="item_code" value="{{ $admin->username }}" disabled>
    </div>
  </div>
  <hr>
  <div class="row">
    <table class="table">
      <tr>
        <td style="width: 145px;">
          <b>Nama</b>
        </td>
        <td style="width: 20px;">:</td>
        <td id="name">{{ $admin->nama }}</td>
      </tr>
      <tr>
        <td>
          <b>Level</b>
        </td>
        <td>:</td>
        <td>{{ $admin->level }}</td>
      </tr>
    </table>
  </div>
   <hr>
  <div class="row">
    <div class="col-lg-6">
      <label for="material"><b>Waktu data ditambahkan</b></label>
      <input type="text" name="" class="form-control" id="material" placeholder="" value="{{ $admin->created_at->toDateString() }}" disabled>
    </div>
    <div class="col-lg-6">
      <label for="brand"><b>Waktu data diperbarui</b></label>
      <input type="text" name="" class="form-control" id="brand" placeholder="" value="{{ $admin->updated_at->toDateString() }}" disabled>
    </div>
  </div>
</div>
