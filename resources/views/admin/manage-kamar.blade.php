@extends('stisla.master')
@section('tittle')
Manage kamar
@endsection

@section('main')
<section class="section">
    <div class="section-header">
      <h1>Manage Kamar</h1>
    </div>
    <div class="card">
        <div class="card">
            <div class="card-header">
                <button href="#create_modal" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#create_modal" style="border-radius: 4px !important;"><i class="fas fa-plus"></i> Tambah Kamar</button>
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
                    <th>Jumlah Kamar</th>
                    <th>Harga Kamar</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($kamar as $kamars)
                <tr>
                    <td>{{ $loop->index += 1  }}</td>
                    <td>{{ $kamars->nama_kamar }}</td>
                    <td>{{ $kamars->jumlah_kamar }}</td>
                    <td>Rp. {{  number_format($kamars->harga_kamar, 2, ',', '.') }}</div></td>
                    <td class="text-center">
                        <a href="{{ route('kamar.fasilitas.index', ['kamar'=>$kamars->id]) }}" class="btn btn-primary btn-sm btn-fasilitas" data-id="{{ $kamars->id }}" title="Fasilitas Kamar" >
                            <i class="fas fa-tv"></i>
                        </a>
                        <a href="" class="btn btn-info btn-sm btn-detail" data-id="{{ $kamars->id }}" title="Detail" data-toggle="modal" data-target="#">
                            <i class="fas fa-fw fa-info"></i>
                        </a>
                        <a href="{{ route('manage-kamar.edit', $kamars->id) }}" style="cursor: pointer; color: white;" class="btn btn-success btn-sm btn-edit" class="btn btn-success btn-sm btn-edit" data-id="{{ $kamars->id }}" title="Ubah data">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <a href="" class="btn-delete btn btn-danger btn-sm" data-id="{{ $kamars->id }}">
                            <i class="fas fa-fw fa-trash"></i>
                            <form action="{{ route('manage-kamar.destroy', $kamars->id) }}"
                                id="delete-kamar{{ $kamars->id }}" method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            <ul class="pagination mb-0">
              <li class="page-item">
                {{ $kamar->links() }}
              </li>
            </ul>
          </nav>
        </div>
    </div>
</section>
@endsection

@section('modal')
@include('admin.modal.kamar-modal')
@endsection

@section('page-script')
@include('admin.action-script.action-kamar')
@endsection
