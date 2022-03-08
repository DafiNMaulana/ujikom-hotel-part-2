@extends('tamu.master-tamu')
@section('tittle')
Rooms
@endsection

@section('hero')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Rooms</h2>
                    <div class="bt-option">
                        <a href="{{ route('tamu.index') }}">Home</a>
                        <span>Rooms</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->
@endsection

@section('main')


<!-- Rooms Section Begin -->
<section class="rooms-section spad">
    <div class="container">
        <div class="row">
            @foreach ($kamar as $kamars)
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('/img/kamar/'. $kamars->foto_kamar ) }}">
                        <div class="ri-text">
                            <h4 style="text-transform: capitalize">{{ $kamars->nama_kamar }}</h4>
                            <h3>Rp. {{  number_format($kamars->harga_kamar, 2, ',', '.') }}<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Description:</td>
                                        <td>{{ $kamars->keterangan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Available Room:</td>
                                        <td>{{ $kamars->jumlah_kamar }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('detail.index', [$kamars->id]) }}" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="room-pagination">
                    {{ $kamar->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->
@endsection
