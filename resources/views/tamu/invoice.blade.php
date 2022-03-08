@extends('tamu.master-tamu')
@section('tittle')
Invoice success
@endsection

@section('hero')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Make Your Invoice</h2>
                    <div class="bt-option">
                        <a href="{{ route('tamu.index') }}">Home</a>
                        <a href="{{ route('reservation.index') }}">reservation</a>
                        <span>Invoice</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
<section class="reservation-section set-bg p-5" data-setbg="{{ asset('sona/img/hero/hero-3.jpg') }}">
    <div class="page-content container bg-white">


        <div class="page-header text-blue-d2">
            <h1 class="page-title text-secondary-d1">
                Invoice
                <small class="page-info">
                    <i class="fa fa-angle-double-right text-80"></i>
                    ID: #{{ now()->timestamp }}-{{ $pemesanan->id }}
                </small>
            </h1>

            <div class="page-tools">
                <div class="action-buttons">
                    <button type="button" id="printPDF" onclick="printPDF()" class="btn bg-white btn-light mx-1px text-95" data-title="PDF">
                        <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                        Export
                    </button>
                </div>
            </div>
        </div>

        <div class="container p-3" id="printContent">

            <div class="row page-orientation">
                <div class="col-6">
                    <h2 class="font-weight-bold text-secondary" style="font-family: sans-serif; ">Booking Invoice</h2>
                </div>
                <div class="col-6">
                    <img class=" float-right" src="{{ asset('sona/img/logo.png') }}" alt="">
                </div>
            </div>

            <div class="row page-orientation">
                <div class="col-12">
                    <h3 style="font-family: sans-serif" class="text-right font-weight-bold text-secondary">Sona Hotel</h3>
                    <br>
                    <p class="text-right">Jl. Kidang Pananjung No.A190, Pangandaran, Kec. Pangandaran, Kab. Pangandaran, <br> Jawa Barat 4637B, Phone. (1234) 999 8877</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 col-lg-12">

                    <!-- .row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <div>
                                <span class="text-sm text-grey-m2 align-middle">To:</span>
                                <span class="text-600 text-110 text-blue align-middle">{{ $pemesanan->nama_pemesan }}</span>
                            </div>
                            <div class="text-grey-m2">
                                <div class="my-1">
                                    Email : {{ $pemesanan->email_pemesan }}
                                </div>
                                <div class="my-1">
                                    Order time : {{ $pemesanan->tanggal_pesan }}
                                </div>
                                <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">{{ $pemesanan->no_hp }}</b></div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                            <div class="text-grey-m2">
                                <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                    Invoice
                                </div>

                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #{{ now()->timestamp }}-{{ $pemesanan->id }}</div>

                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Guest Name:</span>{{ $pemesanan->nama_tamu }}</div>

                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning badge-pill px-25">{{ $pemesanan->status_pemesanan }}</span></div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="mt-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                                <thead class="bg-none bgc-default-tp1">
                                    <tr class="text-white">
                                        <th class="opacity-2">#</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th width="140">Amount</th>
                                    </tr>
                                </thead>

                                <tbody class="text-95 text-secondary-d3">
                                    <tr></tr>
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $pemesanan->kamar->nama_kamar }}</td>
                                        <td>{{ $pemesanan->jumlah_kamar_dipesan }}</td>
                                        <td class="text-95">Rp. {{ number_format($pemesanan->kamar->harga_kamar, 2, ',', '.') }}</td>
                                        <td class="text-secondary-d2">Rp. {{ number_format($pemesanan->kamar->harga_kamar*$pemesanan->jumlah_kamar_dipesan, 2, ',', '.') }}</td>
                                    </tr>
                                    <tr></tr>
                                    <tr class=" bgc-default-l4">
                                        <td>2</td>
                                        <td>Check IN : {{ date('d-m-Y', strtotime($pemesanan->tanggal_checkin)) }}, Check OUT : {{ date('d-m-Y', strtotime($pemesanan->tanggal_checkout)) }}</td>
                                        <td>
                                            <?php
                                            $date1=date_create($pemesanan->tanggal_checkin);
                                            $date2=date_create($pemesanan->tanggal_checkout);
                                            $diff=date_diff($date1,$date2);
                                            echo $diff->format("%a Night");
                                            ?>
                                        </td>
                                        <td class="text-95"> - </td>
                                        <td class="text-secondary-d2" style="width: 170px"> - </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="row mt-3">
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                Extra note such as company or payment information...
                            </div>

                            <div class="col-12 col-sm-5">
                                <div class="row my-2">
                                     <div class="col-7 text-right">
                                         Price for one room
                                     </div>
                                     <div class="col-5 counting">
                                         <span class="text-110 text-secondary-d1">Rp. {{ number_format($pemesanan->kamar->harga_kamar, 2, ',', '.') }}</span>
                                     </div>
                                 </div>

                                 <div class="row my-2">
                                     <div class="col-7 text-right">
                                         Length of stay
                                     </div>
                                     <div class="col-5 counting">
                                         <span class="text-110 text-secondary-d1">{{ $diff->format("%a Night") }}</span>
                                     </div>
                                 </div>
                                <div class="row my-2">
                                    <div class="col-7 text-right">
                                        Number of rooms booked
                                    </div>
                                    <div class="col-5 counting" style="border-bottom: 1px solid black; display: flex; justify-content :space-between;">
                                        <span class="text-110 text-secondary-d1">(x)</span>
                                        <span class="text-110 text-secondary-d1">{{ $pemesanan->jumlah_kamar_dipesan }}</span>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-7 text-right">
                                        Total amount
                                    </div>
                                    <div class="col-5 counting">
                                        <span class="text-110 text-success-d3 opacity-2">Rp. {{  number_format($pemesanan->kamar->harga_kamar*$pemesanan->jumlah_kamar_dipesan*$diff->format("%a"), 2, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('page-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha512-cLuyDTDg9CSseBSFWNd4wkEaZ0TBEpclX0zD3D6HjI19pO39M58AgJ1SjHp6c7ZOp0/OCRcC2BCvvySU9KJaGw==" crossorigin="anonymous"></script>
    <script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script>
        @if (Session::has('iziToast'))
            swal('Warning', "Please don't lose this invoice, please print or screenshot it as proof of the transaction", 'warning');
        @endif

        function printPDF() {
            html2canvas(document.getElementById('printContent'))
            .then((canvas) => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF({
                orientation: 'landscape',
                });
                const imgProps= pdf.getImageProperties(imgData);
                const pdfWidth = pdf.internal.pageSize.getWidth();
                const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('test.pdf');
            });
        }
    </script>
@endpush
