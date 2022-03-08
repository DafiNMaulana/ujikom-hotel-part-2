
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">Nama Pemesan</label>
            <input type="text" name="nama_pemesan" class="form-control" value="{{ $pemesanan->nama_pemesan }}" id="pemesan_name" required autofokus @error('nama_pemesan') style="border: 1px solid red;" @enderror/>
            <label @error('nama_pemesan') class="text-danger" @enderror> @error('nama_pemesan') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">Nama Tamu</label>
            <input type="text" name="nama_tamu" class="form-control" value="{{ $pemesanan->nama_tamu }}" id="name_create" required autofokus @error('nama_tamu') style="border: 1px solid red;" @enderror/>
            <label @error('nama_tamu') class="text-danger" @enderror> @error('nama_tamu') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">Email Pemesan</label>
            <input type="email" name="email_pemesan" class="form-control" value="{{ $pemesanan->email_pemesan }}" id="name_create" required autofokus @error('email_pemesan') style="border: 1px solid red;" @enderror/>
            <label @error('email_pemesan') class="text-danger" @enderror> @error('email_pemesan') {{ $message }} @enderror</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">Tanggal Checkin</label>
            <input type="date" name="tanggal_checkin" value="{{ $pemesanan->tanggal_checkin }}" class="form-control" id="pemesan_name" required autofokus @error('tanggal_checkin') style="border: 1px solid red;" @enderror/>
            <label @error('tanggal_checkin') class="text-danger" @enderror> @error('tanggal_checkin') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">Tanggal Checkout</label>
            <input type="date" name="tanggal_checkout" value="{{ $pemesanan->tanggal_checkout }}" class="form-control" id="name_create" required autofokus @error('tanggal_checkout') style="border: 1px solid red;" @enderror/>
            <label @error('tanggal_checkout') class="text-danger" @enderror> @error('tanggal_checkout') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">Tanggal Di pesan</label>
            <input type="date" name="tanggal_pesan" value="{{ $pemesanan->tanggal_pesan }}" class="form-control" id="name_create" required autofokus @error('tanggal_pesan') style="border: 1px solid red;" @enderror/>
            <label @error('tanggal_pesan') class="text-danger" @enderror> @error('tanggal_pesan') {{ $message }} @enderror</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">Jumlah kamar di pesan</label>
            <input type="text" value="{{ $pemesanan->jumlah_kamar_dipesan }}" onkeydown="return/[0-9]/i.test(event.key)" name="jumlah_kamar_dipesan" class="form-control" id="pemesan_name" required autofokus @error('jumlah_kamar_dipesan') style="border: 1px solid red;" @enderror/>
            <label @error('jumlah_kamar_dipesan') class="text-danger" @enderror> @error('jumlah_kamar_dipesan') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="description">Status pemesanan</label>
            <select name="status_pemesan" class="form-control" style="cursor: pointer;">
                <option value="pesan">pesan</option>
                <option value="checkin">checkin</option>
                <option value="checkout">checkout</option>
                <option value="batal">batal</option>
            </select>
            <label @error('status_pemesan') class="text-danger" @enderror> @error('status_pemesan') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="name">No Hp pemesan</label>
            <input type="text" value="{{ $pemesanan->no_hp }}" onkeydown="return/[0-9]/i.test(event.key)" name="no_hp" class="form-control" id="name_create" required autofokus @error('no_hp') style="border: 1px solid red;" @enderror/>
            <label @error('no_hp') class="text-danger" @enderror> @error('no_hp') {{ $message }} @enderror</label>
        </div>
    </div>
</div>
