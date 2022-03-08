@extends('stisla.master')
@section('tittle')
Manage Fasilitas Hotel
@endsection

@section('main')
<section class="section">
    <div class="section-header">
        <h1>Manage Fasilitas Hotel</h1>
    </div>
    <div class="card">
        <div class="card">
            <div class="card-header">
                <button href="#create_modal" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#create_modal" style="border-radius: 4px !important;"><i class="fas fa-plus"></i> Tambah Fasilitas Hotel</button>
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
                    <th>Nama Fasilitas</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($fasilitasHotel as $fasi)
                <tr>
                    <td>{{ $loop->index += 1  }}</td>
                    <td>{{ $fasi->nama_fasilitas_hotel }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-sm btn-detail" data-id="{{ $fasi->id }}" title="Detail" data-toggle="modal" data-target="#">
                            <i class="fas fa-fw fa-info"></i>
                        </a>
                        <a href="{{ route('manage-fasilitas-hotel.edit', $fasi->id) }}" style="cursor: pointer; color: white;" class="btn btn-success btn-sm btn-edit" class="btn btn-success btn-sm btn-edit" data-id="{{ $fasi->id }}" title="Ubah data">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <a href="" class="btn-delete btn btn-danger btn-sm" data-id="{{ $fasi->id }}">
                            <i class="fas fa-fw fa-trash"></i>
                            <form action="{{ route('manage-fasilitas-hotel.destroy', $fasi->id) }}"
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
                    {{ $fasilitasHotel->links() }}
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
@include('admin.modal.fasilitasHotel-modal')
@endsection

@section('page-script')
@include('admin.action-script.action-fasilitasHotel')
@endsection
