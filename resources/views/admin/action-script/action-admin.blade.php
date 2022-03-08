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
                url : `/admin/manage-admin/${id}`,
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
                url : `/admin/manage-admin/${id}/edit`,
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

        // update
        $('#btn-update').on('click', function() {
            let id = $("#update-form").find("#id_data").val()
            let edit_admin = $('#update-form').serialize()
            $.ajax({
                url : `/admin/manage-admin/${id}`,
                type : 'post',
                method : "patch",
                data : edit_admin,
                success : function(data) {
                $("#edit_modal").modal('hide')
                window.location.assign('/admin/manage-admin')
                alert('Data berhasil diubah')
                },
                error : function(error) {
                    console.log(error.responseJSON);
                    let err_log = error.responseJSON.errors;
                if(typeof(err_log.username) !== 'undefined') {
                    if(error.status == 422) {
                        $("#edit_modal").find('[name="username"]').next().html('<span style="color:red;">'+err_log.username[0]+' </span>')
                    }
                }else {
                        $("#edit_modal").find('[name="username"]').next().html('<span></span>')
                    }
                if(typeof(err_log.password) !== 'undefined') {
                    if(error.status == 422) {
                        $("#edit_modal").find('[name="password"]').next().html('<span style="color:red;">'+err_log.password[0]+' </span>')
                    }
                }else {
                        $("#edit_modal").find('[name="password"]').next().html('<span></span>')
                    }
                if(typeof(err_log.pw_confirmation) !== 'undefined') {
                    if(error.status == 422) {
                        $("#edit_modal").find('[name="pw_confirmation"]').next().html('<span style="color:red;">'+err_log.pw_confirmation[0]+' </span>')
                    }
                }else {
                        $("#edit_modal").find('[name="pw_confirmation"]').next().html('<span></span>')
                    }
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
                $(`#delete-admin${id}`).submit();
                }
            });
        });
})
</script>
