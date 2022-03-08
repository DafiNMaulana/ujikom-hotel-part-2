<script>
    // detail
    $('.btn-detail').on('click', function() {
        let id = $(this).data('id')
        $.ajax({
            url : `/admin/manage-pemesanan/${id}`,
            method : "GET",
            success : function(data) {
            //  console.log(data)
            $("#detail_modal").find(".modal-body").html(data)
            $("#detail_modal").modal('show')
            },
            error : function(error) {
                console.log(error)
            }
        })
    });

    // menampilkan edit
    $('.btn-edit').on('click', function() {
        let id = $(this).data('id')
        $.ajax({
            url : `/admin/manage-pemesanan/${id}/edit`,
            method : "GET",
            success : function(data) {
            $("#edit_modal").find(".modal-body").html(data)
            $("#edit_modal").modal('show')
            },
            error : function(error) {
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
            $(`#delete-pemesanan${id}`).submit();
            }
        });
    });
</script>
