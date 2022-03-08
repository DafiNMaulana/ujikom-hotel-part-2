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
        <div class="card-body">
            <form action="{{ route('manage-fasilitas-hotel.update', $fasilitas->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas_hotel" value="{{ $fasilitas->nama_fasilitas_hotel }}"  @error('nama_fasilitas_hotel') style="border: 1px solid red;" @enderror class="form-control">
                            <label @error('nama_fasilitas_hotel') class="text-danger" @enderror> @error('nama_fasilitas_hotel') {{ $message }} @enderror</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Foto Fasilitas</label>
                            <input type="file" name="foto_fasilitas_hotel" value="{{ $fasilitas->foto_fasilitas_hotel }}"  @error('foto_fasilitas_hotel') style="border: 1px solid red;" @enderror class="form-control">
                            <label @error('foto_fasilitas_hotel') class="text-danger" @enderror> @error('foto_fasilitas_hotel') {{ $message }} @enderror</label>
                        </div>
                    </div>
                </div> {{-- foto --}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="description">Keterangan</label>
                            <textarea name="deskripsi_fasilitas_hotel" class="form-control" id="keterangan" required autofokus @error('deskripsi_fasilitas_hotel') style="border: 1px solid red; height: 100px;" @enderror  style="height: 100px">{{ $fasilitas->deskripsi_fasilitas_hotel }}</textarea>
                            <label @error('deskripsi_fasilitas_hotel') class="text-danger" @enderror> @error('deskripsi_fasilitas_hotel') {{ $message }} @enderror</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" style="border-radius: 10px;" src="{{ asset('/img/fasilitas_hotel/'. $fasilitas->foto_fasilitas_hotel ) }}" alt="foto kamar">
                    </div>
                </div>
                <div class="footer">
                    <a href="{{ route('manage-fasilitas-hotel.index') }}" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success" id="add">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection
