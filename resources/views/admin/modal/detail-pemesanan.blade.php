<div class="row">
    <div class="col-6">
        <table>
            <tr>
                <td style="width: 150px">Nama Pemesan</td>
                <td style="width: 16px">:</td>
                <td style="text-transform: capitalize">{{ $pemesanan->nama_pemesan }}</</td>
            </tr>
            <tr>
                <td style="width: 150px">No Hp</td>
                <td style="width: 16px">:</td>
                <td>{{ $pemesanan->no_hp }}</</td>
            </tr>
            <tr>
                <td style="width: 150px">Email</td>
                <td style="width: 16px">:</td>
                <td>{{ $pemesanan->email_pemesan }}</</td>
            </tr>
            <tr>
                <td style="width: 150px">Waktu Pesan</td>
                <td style="width: 16px">:</td>
                <td>{{ $pemesanan->tanggal_pesan }}</</td>
            </tr>
        </table>
    </div>
    <div class="col-6">
        <table>
            <tr>
                <td style="width: 150px">Nama Tamu</td>
                <td style="width: 16px">:</td>
                <td style="text-transform: capitalize">{{ $pemesanan->nama_tamu }}</</td>
            </tr>

            <tr>
                <td style="width: 150px">Status</td>
                <td style="width: 16px">:</td>
                <td style="text-transform: capitalize">{{ $pemesanan->status_pemesanan }}</</td>
            </tr>

            <tr>
                <td style="width: 150px">Update Status</td>
                <td style="width: 16px">:</td>
                <td>
                    <form name="update_pemesanan" id="update-form" action="{{ route('manage-pemesanan.store') }}" method="post">
                        @method('post')
                        @csrf
                        <input type="hidden" value="{{ $pemesanan->id }}" name="id" id="id_data"/>
                        <select name="status" class="form-control form-control-sm">
                            @if ($pemesanan->status_pemesanan == 'unpaid')
                            <option value="cancel">Cancel</option>
                            <option value="checkin" selected> Check IN</option>
                            @endif
                            @if ($pemesanan->status_pemesanan == 'checkin')
                            <option value="checkout"> Check OUT</option>
                            @endif
                        </select>
                    </form> </td>
                <td> <button type="button" id="btn-update-status" class="btn btn-sm btn-success ml-2">Update</button> </td>
            </tr>
        </table>
    </div>

    <div class="col-12 col-md-6 col-lg-12 mt-3">
        <div class="text-95 text-secondary-d3">

            <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                <div class="col-9 col-sm-5">Nama Kamar</div>
                <div class="d-none d-sm-block col-2"></div>
                <div class="d-none d-sm-block col-2 text-95"></div>
                <div class="col-2 text-secondary-d2">{{ $pemesanan->kamar->nama_kamar }}</div>
            </div>

            <div class="row mb-2 mb-sm-0 py-25">
                <div class="col-9 col-sm-5">Check In</div>
                <div class="d-none d-sm-block col-2"></div>
                <div class="d-none d-sm-block col-2 text-95"></div>
                <div class="col-2 text-secondary-d2">{{ $pemesanan->tanggal_checkin }}</div>
            </div>

            <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                <div class="col-9 col-sm-5">Check Out</div>
                <div class="d-none d-sm-block col-2"></div>
                <div class="d-none d-sm-block col-2 text-95"></div>
                <div class="col-2 text-secondary-d2">{{ $pemesanan->tanggal_checkout }}</div>
            </div>

            <div class="row mb-2 mb-sm-0 py-25">
                <div class="col-9 col-sm-5">Durasi Menginap</div>
                <div class="d-none d-sm-block col-2"></div>
                <div class="d-none d-sm-block col-2 text-95"></div>
                <div class="col-2 text-secondary-d2">
                    <?php
                    $date1=date_create($pemesanan->tanggal_checkin);
                    $date2=date_create($pemesanan->tanggal_checkout);
                    $diff=date_diff($date1,$date2);
                    echo $diff->format("%a Malam");
                    ?>
                </div>
            </div>

            <div class="row mb-2 mb-sm-0 py-25 bgc-default-l4">
                <div class="col-9 col-sm-5">Jumlah Kamar Dipesan</div>
                <div class="d-none d-sm-block col-2"></div>
                <div class="d-none d-sm-block col-2 text-95"></div>
                <div class="col-2 text-secondary-d2">{{   $pemesanan->jumlah_kamar_dipesan }}</div>
            </div>
            <div class="row mb-2 mb-sm-0 py-25">
                <div class="col-9 col-sm-5">Harga per satu kamar</div>
                <div class="d-none d-sm-block col-2"></div>
                <div class="d-none d-sm-block col-2 text-95"></div>
                <div class="col-2 text-secondary-d2">Rp. {{  number_format($pemesanan->kamar->harga_kamar, 2, ',', '.') }}</div>
            </div>
            <hr>

            <div class="row text-600 text-white bgc-default-tp1 py-25">
                <div class="col-9 col-sm-5 text-105">Total Bayar</div>
                <div class="d-none d-sm-block col-1"></div>
                <div class="d-none d-sm-block col-lg-3 col-sm-2"></div>
                <div class="d-none d-sm-block col-lg-3 col-sm-2 text-110"> Rp. {{  number_format($pemesanan->kamar->harga_kamar*$pemesanan->jumlah_kamar_dipesan, 2, ',', '.') }}</div>
                {{-- <div class="col-2">Amount</div> --}}
            </div>
        </div>
    </div>
</div>

<script>

    $('#btn-update-status').on('click', function() {
        let id = $("#update-form").find("#id_data").val()
        let edit_admin = $('#update-form').serialize()
        $.ajax({
            url : `/admin/manage-pemesanan/${id}`,
            type : 'post',
            method : "patch",
            data : edit_admin,
            success : function(data) {
            $("#edit_modal").modal('hide')
            window.location.assign('/admin/manage-pemesanan')
            alert('Data berhasil diubah')
            },
            error : function(error) {
                console.log(error.responseJSON);
                let err_log = error.responseJSON.errors;
            }
        })
    });

</script>
