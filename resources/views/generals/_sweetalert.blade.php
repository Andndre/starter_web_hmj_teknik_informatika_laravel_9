<script>
    $(document).ready(function() {
        const success = $(".berhasil").data("berhasil");
        if (success) {
            swal.fire({
                title: "Berhasil!",
                text: success,
                icon: "success",
            });
        }
    });


    $(document).ready(function() {
        const warning = $(".warning").data("warning");
        if (warning) {
            swal.fire({
                title: "Peringatan!",
                text: warning,
                icon: "warning",
                buttons: {
                    confirm: {
                        text: "Tutup",
                        value: true,
                        visible: true,
                        className: "btn btn-success",
                        closeModal: true
                    }
                },
            });
        }
    });

    $(document).ready(function() {
        const gagal = $(".gagal").data("gagal");
        if (gagal) {
            swal.fire({
                title: "Gagal!",
                text: gagal,
                icon: "error",
            });
        }
    });

    const alertGagal = (gagal) => {
        swal.fire({
            title: "Gagal!",
            text: gagal,
            icon: "error",
        });
    }

    const alertSuccess = (success) => {
        swal.fire({
            title: "Berhasil!",
            text: success,
            icon: "success",
        });
    }

    const alertConfirm = (button) => {
        const id = $(button).data('id');
        swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Data akan terhapus secara permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Hapus Data",
                cancelButtonText: "Batal",
            }).then((result) => {
            if (result.isConfirmed) {
                $('#delete-' + id).submit();
                } else {
                    swal.fire("Data Aman", "Data Yang Dipilih Batal Dihapus", "success");
                }
            });
    }

    const changeStatus = (button) => {
        const id = $(button).data('id');
        swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Data akan diubah statusnya!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Ubah Status",
                cancelButtonText: "Batal",
            }).then((result) => {
            if (result.isConfirmed) {
                    $('#change-' + id).submit();
                } else {
                    swal.fire("Data Aman", "Data Yang Dipilih Batal Diubah", "success");
                    table.DataTable().ajax.reload();
                }
            });
    }
</script>
