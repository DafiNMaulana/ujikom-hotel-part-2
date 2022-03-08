<script>
    // jika create error
    @if (session('error'))
        var fasilitas_name = localStorage.getItem('fasilitas_name') || ''
        var deskripsi = localStorage.getItem('keterangan') || ''

        $('#fasilitas_create').val(fasilitas_name)
        $('#keterangan').val(deskripsi)
    @endif

    $('#add').on('click', function() {
        name = $('#fasilitas_create').val()
        keterangan = $('#keterangan').val()

        localStorage.setItem('fasilitas_name', name)
        localStorage.setItem('keterangan', keterangan)
    });

    // detail kamar
    $('.btn-detail').on('click', function() {
        let id = $(this).data('id');
        $.ajax({
            url : `/admin/manage-fasilitas-hotel/${id}`,
            method: "GET",
            success: function(data) {
                $("#detail_modal").find(".modal-body").html(data)
                $("#detail_modal").modal('show')
            },
            error: function(error) {
                console.log(error)
            }
        })
    });

    // delete
    $('.btn-delete').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Yakin hapus data?',
            text: 'Data yang kamu hapus ga bisa di balikin',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            $(`#delete-fasilitas${id}`).submit();
            }
        });
    });
</script>
