@extends('stisla.master')

@section('main')

<div class="col-12 col-md-12 col-lg-7">
    <div class="card">
      <form method="post" class="needs-validation" novalidate="">
        <div class="card-header">
          <h4>Edit Profile</h4>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <label>Username</label>
                <input type="text" name="username" value="{{ auth()->user()->username }}" class="form-control"required="">
                <div class="invalid-feedback">
                  Please fill in the first name
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
                <label>Nama Lengkap</label>
                <input type="text" name='nama' class="form-control" value="{{ auth()->user()->nama }}">
                <div class="invalid-feedback">
                  Please fill in the last name
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password baru ?">
                <div class="invalid-feedback">
                  Please fill in the email
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
                <label>Konfirmasi password baru</label>
                <input type="password" name="confirm_pw" class="form-control" value="" placeholder="Masukan kembali password nya !">
              </div>
            </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
