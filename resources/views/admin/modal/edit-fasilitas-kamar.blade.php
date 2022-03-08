{{-- 
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <input type="hidden" value="{{ $fasilitas->id }}" name="id" id="id_data"/>
            <label for="name">Nama Fasilitas</label>
            <input type="text" name="nama_fasilitas" onkeydown="return/[a-z 1-9]/i.test(event.key)" value="{{ $fasilitas->nama_fasilitas_kamar }}" class="form-control" id="name_create" required autofokus @error('nama_fasilitas') style="border: 1px solid red;" @enderror/>
            <label @error('nama_fasilitas') class="text-danger" @enderror> @error('nama_fasilitas') {{ $message }} @enderror</label>
        </div>
    </div>
</div>
 --}}

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <input type="hidden" value="{{ $fasilitas->id }}" name="id" id="id_data"/>
            <label for="name">Nama Kasur</label>
            <input type="text" placeholder="King bed" value="{{ $fasilitas->nama_kasur }}" name="nama_kasur" onkeydown="return/[a-z 1-9]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('nama_kasur') style="border: 1px solid red;" @enderror/>
            <label @error('nama_kasur') class="text-danger" @enderror> @error('nama_kasur') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="name">Kapasitas ruangan</label>
            <input type="text" placeholder="Max person 5" value="{{ $fasilitas->kapasitas_ruangan }}" name="kapasitas_ruangan" onkeydown="return/[a-z 0-9]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('kapasitas_ruangan') style="border: 1px solid red;" @enderror/>
            <label @error('kapasitas_ruangan') class="text-danger" @enderror> @error('kapasitas_ruangan') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="name">Ukuran ruangan</label>
            <input type="text" placeholder="30 ft" value="{{ $fasilitas->ukuran_ruangan }}" name="ukuran_ruangan" onkeydown="return/[a-z 0-9]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('ukuran_ruangan') style="border: 1px solid red;" @enderror/>
            <label @error('ukuran_ruangan') class="text-danger" @enderror> @error('ukuran_ruangan') {{ $message }} @enderror</label>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="name">Fasilitas</label>
            <input type="text" placeholder="Tv, Wifi, Bathub premium. (harus diakhiri titik)" value="{{ $fasilitas->nama_fasilitas_kamar }}" name="nama_fasilitas" onkeydown="return/[a-z ,./]/i.test(event.key)" class="form-control" id="name_create" required autofokus @error('nama_fasilitas') style="border: 1px solid red;" @enderror/>
            <label @error('nama_fasilitas') class="text-danger" @enderror> @error('nama_fasilitas') {{ $message }} @enderror</label>
        </div>
    </div>
</div>
