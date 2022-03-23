@extends('tamu.master-tamu')
@section('tittle')
Reservation
@endsection

@section('hero')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Make Your Reservation</h2>
                    <div class="bt-option">
                        <a href="{{ route('tamu.index') }}">Home</a>
                        <span>Reservation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
<section class="reservation-section set-bg p-5" data-setbg="{{ asset('sona/img/hero/hero-3.jpg') }}">
    <div class="col-8 offset-xl-2 offset-lg-1 shadow mb-5">
        <div class="booking-form">
            <h3>Booking Your Hotel</h3>
            <form action="{{ route('tamu.store') }}" id='insert-pemesanan' method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="date" class="pemesan" required name="tanggal_checkin" value="{{ old('tanggal_checkin') }}" autofokus @error('tanggal_checkin') style="border: 1px solid red;" @enderror id="date-in">
                                <label @error('tanggal_checkin') class="text-danger" @enderror> @error('tanggal_checkin') {{ $message }} @enderror</label>
                            {{-- <i class="icon_calendar"></i> --}}
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="date" class="pemesan" required name="tanggal_checkout" value="{{ old('tanggal_checkout') }}" autofokus @error('tanggal_checkout') style="border: 1px solid red;" @enderror id="date-out">
                                <label @error('tanggal_checkout') class="text-danger" @enderror> @error('tanggal_checkout') {{ $message }} @enderror</label>
                            {{-- <i class="icon_calendar"></i> --}}
                        </div>
                        <div class="check-input">
                            <label for="pemesan-input">Customer Name:</label>
                            <input type="text" class="pemesan" placeholder='*EX : Diqi ziyad candramawa maulana' required name="nama_pemesan" value="{{ old('nama_pemesan') }}" autofokus @error('nama_pemesan') style="border: 1px solid red;" @enderror id="pemesan-input">
                                <label @error('nama_pemesan') class="text-danger" @enderror> @error('nama_pemesan') {{ $message }} @enderror</label>
                        </div>
                        <div class="check-input mt-2">
                            <label for="pemesan-input">Guest Name:</label>
                            <input type="text" class="pemesan" placeholder='*EX : Putri Angraini puspita maulani' required name="nama_tamu"autofokus value="{{ old('nama_tamu') }}" @error('nama_tamu') style="border: 1px solid red;" @enderror id="pemesan-input">
                            <label @error('nama_tamu') class="text-danger" @enderror> @error('nama_tamu') {{ $message }} @enderror</label>
                            <label for="pemesan-input" class="d-none text-danger lable">Nama tidak boleh angka</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="check-input mb-3">
                            <label for="pemesan-input">Phone Number:</label>
                            <input type="text" name="no_hp" id="no_hp" onkeypress='validate(event)' placeholder='*EX : 62 838 8XXX XXXX' required class="pemesan"autofokus value="{{ old('no_hp') }}" @error('no_hp') style="border: 1px solid red;" @enderror id="pemesan-input">
                                <label @error('no_hp') class="text-danger" @enderror> @error('no_hp') {{ $message }} @enderror</label>
                        </div>
                        <div class="check-input mb-3">
                            <label for="pemesan-input">Order Email:</label>
                            <input type="email" name="email_pemesan" placeholder='*EX : Diqiziyad@gmail.com' required class="pemesan"autofokus value="{{ old('email_pemesan') }}" @error('email_pemesan') style="border: 1px solid red;" @enderror id="pemesan-input">
                                <label @error('email_pemesan') class="text-danger" @enderror> @error('email_pemesan') {{ $message }} @enderror</label>
                        </div>
                        <div class="check-input mb-2">
                            <label for="pemesan-input">Number of Rooms Booked:</label>
                            <input type="number" required name="jumlah_kamar_dipesan" placeholder='Minimum 1 | Maximum' class="pemesan"autofokus value="{{ old('jumlah_kamar_dipesan') }}" @error('jumlah_kamar_dipesan') style="border: 1px solid red;" @enderror id="pemesan-input">
                            <label @error('jumlah_kamar_dipesan') class="text-danger" @enderror> @error('jumlah_kamar_dipesan') {{ $message }} @enderror</label>
                        </div>
                        <div class="check-input">
                            <label for="pemesan-input">Room Name:</label>
                            <select name="kamar_id" id="pemesanan-input" class="pemesanan-room"autofokus value="{{ old('kamar_id') }}" @error('kamar_id') style="border: 1px solid red;" @enderror style="cursor: pointer;">
                                @foreach ($kamar as $kamars)
                                <option value="{{ $kamars->id }}">{{ $kamars->nama_kamar }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="button" class="submit-button text-center btn-instert-pemesanan">Book now</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('page-script')
<script>

    // // No hp tamu reservation ==================
    // function setInputFilter(textbox, inputFilter) {
    // ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    //     textbox.addEventListener(event, function() {
    //     if (inputFilter(this.value)) {
    //         this.oldValue = this.value;
    //         this.oldSelectionStart = this.selectionStart;
    //         this.oldSelectionEnd = this.selectionEnd;
    //     } else if (this.hasOwnProperty("oldValue")) {
    //         this.value = this.oldValue;
    //         this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
    //     } else {
    //         this.value = "";
    //     }
    //     });
    // });
    // }
    // setInputFilter(document.getElementById("no_hp"), function(value) {
    //     return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    // });
    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9 ]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }

    function validateName(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[a-z ]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
            $('.lable').style('display', 'inline');
        }
    }

    // konfirmasi order booking
    $('.btn-instert-pemesanan').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure want to book this room ?',
            text: 'Make sure the data you input is correct and can be accounted for',
            icon: 'info',
            buttons: true,
            dangerMode: false,
        })
        .then((willDelete) => {
            if (willDelete) {
            $(`#insert-pemesanan`).submit();
            }
        });
    });

</script>
@endpush
