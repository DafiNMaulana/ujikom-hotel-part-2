@extends('stisla.master')
@section('tittle')
Manage Fasilitas Kamar
@endsection

@section('main')
<section class="section">
    <div class="section-header">
        <a href="{{ route('manage-kamar.index') }}" class="mr-2" style="font-size: 25px;"><i class="fas fa-arrow-left"></i></a>
        <h1>Manage Fasilitas Kamar</h1>
    </div>
    <div class="card">
        <div class="card">
            <div class="card-header">
                <button href="#create_modal"@if(session('pesan')) class="d-none" @endif @if(session('destroy')) class="d-block" @endif class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#create_modal" style="border-radius: 4px !important;"><i class="fas fa-plus"></i> Tambah Fasilitas Kamar</button>
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
            @if(session('pesan'))
            <div class="alert alert-success alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                {{  session('pesan') }}
              </div>
            </div>
            @endif
            @if(session('destroy'))
            <div class="alert alert-success alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                {{  session('destroy') }}
              </div>
            </div>
            @endif
            <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Nama Kasur</th>
                    <th>Kapasitas ruangan</th>
                    <th>Ukuran ruangan</th>
                    <th>Nama Fasilitas</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($fasilitas as $fasi)
                <tr>
                    <td>{{ $loop->index += 1  }}</td>
                    <td>{{ $fasi->kamar->nama_kamar }}</td>
                    <td>{{ $fasi->nama_kasur }}</td>
                    <td>{{ $fasi->kapasitas_ruangan }}</td>
                    <td>{{ $fasi->ukuran_ruangan }}</td>
                    <td>{{ $fasi->nama_fasilitas_kamar }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-sm btn-detail" data-id="{{ $fasi->id }}" title="Detail" data-toggle="modal" data-target="#">
                            <i class="fas fa-fw fa-info"></i>
                        </a>
                        <a style="cursor: pointer; color: white;" class="btn btn-success btn-sm btn-edit" class="btn btn-success btn-sm btn-edit" data-id="{{ $fasi->id }}" title="Ubah data">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <a href="" class="btn-delete btn btn-danger btn-sm" data-id="{{ $fasi->id }}">
                            <i class="fas fa-fw fa-trash"></i>
                            <form action="{{ route('kamar.fasilitas.destroy', ['kamar'=>$kamar->id, 'fasilita'=>$fasi->id]) }}"
                                id="delete-fasilitas{{ $fasi->id }}" method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item">
                    {{ $fasilitas->links() }}
                  </li>
                </ul>
              </nav>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

@section('modal')
@include('admin.modal.fasilitas-modal')
@endsection

@section('page-script')
@include('admin.action-script.action-fasilitas')
@endsection
