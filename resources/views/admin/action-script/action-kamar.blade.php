<script>
$(document).ready(function() {
    // jika create error
    @if (session('error'))
        var kamar_name = localStorage.getItem('nama_kamar') || ''
        var kamar_juml = localStorage.getItem('jumlah_kamar') || ''
        var price = localStorage.getItem('harga_kamar') || ''
        var desc = localStorage.getItem('keterangan') || ''

        $('#name_create').val(kamar_name)
        $('#jumlah_create').val(kamar_juml)
        $('#harga_create').val(price)
        $('#keterangan').val(desc)
    @endif

    $('#add').on('click', function() {
        name = $('#name_create').val()
        count = $('#jumlah_create').val()
        price = $('#harga_create').val()
        desc = $('#keterangan').val()

        localStorage.setItem('nama_kamar', name)
        localStorage.setItem('jumlah_kamar', count)
        localStorage.setItem('harga_kamar', price)
        localStorage.setItem('keterangan', desc)
    });

    // Harga kamar ==================
    function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
            this.value = "";
        }
        });
    });
    }
    setInputFilter(document.getElementById("harga_create"), function(value) {
        return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    });

    // detail kamar
    $('.btn-detail').on('click', function() {
        let id = $(this).data('id');
        $.ajax({
            url : `/admin/manage-kamar/${id}`,
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

    // edit kamar
    $('.btn-edit').on('click', function() {
        let id = $(this).data('id');
        $.ajax({
            url : `/admin/manage-kamar/${id}/edit`,
            method: "GET",
            success: function(data) {
                $("#edit_modal").find(".modal-body").html(data)
                $("#edit_modal").modal('show')
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
            $(`#delete-kamar${id}`).submit();
            }
        });
    });

})
</script>
