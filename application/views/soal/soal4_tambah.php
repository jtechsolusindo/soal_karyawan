<div class="row mt-5 mb-5">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="d-flex justify-content-between">
            <h4>Tambah Barang</h4>
        </div>
        <hr>
        <form id="formulir">
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Barang</label>
                <input type="number" class="form-control" name="harga_barang" id="harga_barang" placeholder="Masukkan Harga Barang" required />
            </div>
            <div class="d-flex justify-content-between">
                <h5 class="mb-0">Foto Barang</h5>
            </div>
            <hr>
            <button type="button" class="btn btn-success btn-sm">Tambah Foto</button>
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>File Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><input type="file"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="file"></td>
                        <td><button type="button" class="btn btn-danger btn-sm">Hapus Foto</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-5 mb-5">
                <a href="<?= base_url() . 'soal4' ?>" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    var BASE_URL = '<?= base_url() ?>';

    $(document).ready(function() {

    });

    $("#formulir").on('submit', (function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        Swal.fire({
            title: '<strong>Apakah data sudah benar?</strong>',
            type: 'info',
            showCloseButton: false,
            showCancelButton: true,
            focusConfirm: false,
            allowOutsideClick: false,
            confirmButtonText: 'Ya',
            confirmButtonAriaLabel: 'Ya',
            cancelButtonText: 'Batal',
            cancelButtonAriaLabel: 'Batal',
        }).then((result) => {
            if (result.value) {
                save_form(formData)
            }
        })
    }));

    function save_form(formData) {
        show_loading_swal();
        $.ajax({
            type: "POST",
            url: BASE_URL + 'soal4/submit',
            contentType: false,
            processData: false,
            data: formData,
            dataType: 'json',
            success: function(res) {
                if (res.status == 'success') {
                    Swal.fire({
                        title: "Success!",
                        text: res.message,
                        type: 'success',
                        allowOutsideClick: false,
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = BASE_URL + 'soal4';
                        }
                    })
                } else {
                    fail_save(res.message);
                }
            },
            error: function(e) {
                fail_save();
            }
        });
    }
</script>