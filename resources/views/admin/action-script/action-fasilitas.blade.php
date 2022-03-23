<script>
$(document).ready(function() {
        // jika create error
        @if (session('error'))
            var username = localStorage.getItem('username') || ''
            var password = localStorage.getItem('password') || ''
            var nama = localStorage.getItem('nama') || ''

            $('#name_create').val(username)
            $('#pass_create').val(password)
            $('#nama').val(nama)
        @endif

        $('#add').on('click', function() {
            user = $('#name_create').val()
            pass = $('#pass_create').val()
            pet = $('#nama').val()

            localStorage.setItem('username', user)
            localStorage.setItem('password', pass)
            localStorage.setItem('nama', pet)
        });

        // detail
        $('.btn-detail').on('click', function() {
            let id = $(this).data('id')
            $.ajax({
                url : `/admin/kamar/${id}/fasilitas/${id}`,
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

        // edit
        $('.btn-edit').on('click', function() {
            let id = $(this).data('id')
            $.ajax({
                url : `/admin/kamar/${id}/fasilitas/${id}/edit`,
                method : "GET",
                success : function(data) {
                //  console.log(data)
                $("#edit_modal").find(".modal-body").html(data)
                $("#edit_modal").modal('show')
                },
                error : function(error) {
                    console.log(error)
                }
            })
        });

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

        $('#btn-update').on('click', function() {
            let id = $("#update-form").find("#id_data").val()
            let edit_fasilitas = $('#update-form').serialize()
            $.ajax({
                url : `/admin/kamar/${id}/fasilitas/${id}`,
                type : 'post',
                method : "patch",
                data : edit_fasilitas,
                success : function(data) {
                $("#edit_modal").modal('hide')
                    window.location.reload()
                    alert('Data berhasil diubah')
                    $('.btn-addfasi').style('display', 'none')
                },
                error : function(error) {
                    console.log(error.responseJSON);
                    let err_log = error.responseJSON.errors;
                }
                })
        });
})
</script>
