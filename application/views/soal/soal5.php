<a href="<?= base_url() . 'soal5/export_pdf' ?>" target="_blank" class="btn btn-warning mt-5 mb-4">Export PDF</a>
<a href="<?= base_url() . 'soal5/export_excel' ?>" target="_blank" class="btn btn-success mt-5 mb-4">Export Excel</a>
<table class="table table-bordered " id="datatable">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA KONSUMEN</th>
            <th>EMAIL</th>
            <th>No HP</th>
            <th>ALAMAT</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_konsumen as $k => $konsumen) { ?>
            <tr>
                <td><?= ++$k ?></td>
                <td><?= $konsumen->nama ?></td>
                <td><?= $konsumen->email ?></td>
                <td><?= $konsumen->no_hp ?></td>
                <td><?= $konsumen->alamat ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    var BASE_URL = '<?= base_url() ?>';
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>