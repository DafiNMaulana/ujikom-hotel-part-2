@extends('tamu.master-tamu')
@section('tittle')
Details
@endsection
@section('header')
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Rooms</h2>
                    <div class="bt-option">
                        <a href="./home.html">Home</a>
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

<!-- Room Details Section Begin -->
<section class="room-details-section spad">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-4">
                <div class="room-details-item">
                    <img src="{{ asset('sona/img/room/room-1.jpg') }}" alt="">
                    <div class="rd-text">
                        <h2>Rp. {{  number_format($kamar->harga_kamar, 2, ',', '.') }}<span>/Pernight</span></h2>
                        <table>
                            <tbody>
                                @foreach ($fasilitasKamar as $fasilitas)
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td>{{ $fasilitas->ukuran_ruangan }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td>{{ $fasilitas->kapasitas_ruangan }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Bed:</td>
                                    <td>King Beds</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td>{{ $fasilitas->nama_fasilitas_kamar }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="room-details-item">
                    <div class="rd-text">
                        <div class="rd-title">
                            <h3>{{ $kamar->nama_kamar }}</h3>
                            <div class="rdt-right">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <a href="#" class="button-booking">Booking Now</a>
                            </div>
                        </div>
                        <p class="f-para">{{ $kamar->keterangan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Details Section End -->
@endsection
