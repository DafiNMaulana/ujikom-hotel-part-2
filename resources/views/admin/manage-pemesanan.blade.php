@extends('stisla.master')
@section('tittle')
Manage Pemesanan
@endsection

@section('main')
<section class="section">

    <div class="section-header">
      <h1>Manage Pemesanan</h1>
    </div>
    <div class="card">
        <div class="card">
            <div class="card-header">
                <h4>Table Pemesanan</h4>
                <div class="card-header-form">
                    <form method="get" action="{{ route('search') }}">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Cari nama tamu...">
                        <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
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
                    <th>Nama Tamu</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Checkin</th>
                    <th>Tanggal Checkout</th>
                    <th>Status Pemesanan</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($pemesanan as $pemesanans)
                <tr>
                    <td>{{ $loop->index += 1  }}</td>
                    <td>{{ $pemesanans->nama_tamu }}</td>
                    <td>{{ $pemesanans->nama_pemesan }}</td>
                    <td>{{ $pemesanans->tanggal_checkin }}</td>
                    <td>{{ $pemesanans->tanggal_checkout }}</td>
                    <td>{{ $pemesanans->status_pemesanan }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-sm btn-detail" data-id="{{ $pemesanans->id }}" title="Detail" data-toggle="modal" data-target="#">
                            <i class="fas fa-fw fa-info"></i>
                        </a>
                        <a style="cursor: pointer; color: white;" class="btn btn-success btn-sm btn-edit" class="btn btn-success btn-sm btn-edit" data-id="{{ $pemesanans->id }}" title="Ubah data">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <a href="" class="btn-delete btn btn-danger btn-sm" data-id="{{ $pemesanans->id }}">
                            <i class="fas fa-fw fa-trash"></i>
                            <form action="{{ route('manage-pemesanan.destroy', $pemesanans->id) }}" id="delete-pemesanan{{ $pemesanans->id }}" method="POST">
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
                {{ $pemesanan->links() }}
              </li>
            </ul>
          </nav>
        </div>
    </div>
</section>
@endsection

@section('modal')
@include('admin.modal.pemesanan-modal')
@endsection

@section('page-script')
@include('admin.action-script.action-pemesanan')
@endsection

