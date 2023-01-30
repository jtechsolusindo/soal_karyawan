<div class="col-md-6">
    <form>
        <div class="mb-3">
            <label class="form-label">Provinsi</label>
            <select class="form-control" name="provinsi" id="provinsi"></select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kota/Kabupaten</label>
            <select class="form-control" name="kota" id="kota"></select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kecamatan</label>
            <select class="form-control" name="kecamatan" id="kecamatan"></select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kelurahan</label>
            <select class="form-control" name="kelurahan" id="kelurahan"></select>
        </div>
    </form>
</div>

<script>
    var BASE_URL = '<?= base_url() ?>';

    $(document).ready(function() {
        get_provinsi(35);
    });

    function get_provinsi(id_selected) {
        URL_DATA = BASE_URL + "soal1/get_provinsi";
        $.ajax({
            dataType: "json",
            url: URL_DATA,
            success: function(res) {
                if (res != null) {
                    var options = '<option value="0">PILIH PROVINSI</option>';
                    $.each(res, function(i, v) {
                        options += '<option value="' + v.id + '">' + v.nama + '</option>';
                    });
                    $("#provinsi").html(options);
                    $("#provinsi").val(id_selected).trigger('change').prop('disabled', true);
                }
            },
            error: function(res) {
                console.log("Gagal Menghubungkan Ke Server");
            },

        });
    }

    $("#provinsi").change(function(e) {
        var value = $(this).val();
        get_kota(value);
    });


    function get_kota(id_provinsi) {
        URL_DATA = BASE_URL + "soal1/get_kota/" + id_provinsi;
        $.ajax({
            dataType: "json",
            url: URL_DATA,
            success: function(res) {
                if (res != null) {
                    var options = '<option value="0">PILIH KOTA</option>';
                    $.each(res, function(i, v) {
                        options += '<option value="' + v.id + '">' + v.nama + '</option>';
                    });
                    $("#kota").html(options).trigger('change');
                }
            },
            error: function(res) {
                console.log("Gagal Menghubungkan Ke Server");
            },

        });
    }
</script>