@extends('stisla.master')
@section('tittle')
Edit Kamar
@endsection

@section('main')
<div class="row">
    <div class="col-12 col-md-6 col-lg-8">
      <div class="card">
        <div class="card-header">
          <h4 class="text-primary">Ubah data</h4>
        </div>
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible show fade">
          <div class="alert-body">
            <button class="close" data-dismiss="alert">
              <span>&times;</span>
            </button>
            {{  session('error') }}
          </div>
        </div>
        @endif
        @endif
        <div class="card-body">
            <form action="{{ route('manage-kamar.update', $kamar->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label>Nama Kamar</label>
                          <input type="text" name="nama_kamar" value="{{ $kamar->nama_kamar }}" @error('jumlah_kamar') @enderror class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Jumlah Kamar</label>
                            <input type="text" name="jumlah_kamar" value="{{ $kamar->jumlah_kamar }}"  @error('jumlah_kamar') style="border: 1px solid red;" @enderror class="form-control">
                            <label @error('jumlah_kamar') class="text-danger" @enderror> @error('jumlah_kamar') {{ $message }} @enderror</label>
                        </div>
                    </div>
                </div> {{--   --}}
                <div class="row">
                    <div class="col-lg-6">
                      <label for="price"><b>Harga Kamar</b></label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp.</span>
                        </div>
                        <input type="text" name="harga_kamar" value="{{ $kamar->harga_kamar }}" id="harga_create" class="form-control"  required autofokus @error('harga_kamar') style="border: 1px solid red;" @enderror />
                    </div>
                    <label @error('harga_kamar') class="text-danger" @enderror> @error('harga_kamar') {{ $message }} @enderror</label>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label>Foto kamar</label>
                          <input type="file" name="foto_kamar" value="{{ asset('/img/kamar/'. $kamar->foto_kamar ) }}" class="form-control" @error('foto_kamar') style="border: 1px solid red;" @enderror>
                          <label @error('foto_kamar') class="text-danger" @enderror> @error('foto_kamar') {{ $message }} @enderror</label>
                        </div>
                    </div>
                </div>{{-- row --}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="description">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="keterangan" required  @error('foto_kamar') style="border: 1px solid red;" @enderror style="height: 100px">{{ $kamar->keterangan }}</textarea>
                            <label @error('keterangan') class="text-danger" @enderror> @error('keterangan') {{ $message }} @enderror</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" style="border-radius: 10px;" src="{{ asset('/img/kamar/'. $kamar->foto_kamar ) }}" alt="foto kamar">
                    </div>
                </div>
                <div class="footer">
                    <a href="{{ route('manage-kamar.index') }}" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success" id="add">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection
