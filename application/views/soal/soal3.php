<button class="btn btn-success mt-5 mb-4">Tambah Data</button>
<table class="table table-bordered " id="datatable">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA PEGAWAI</th>
            <th>EMAIL</th>
            <th>NO HP</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_pegawai as $k => $pegawai) { ?>
            <tr>
                <td><?= ++$k ?></td>
                <td><?= $pegawai->nama ?></td>
                <td><?= $pegawai->email ?></td>
                <td><?= $pegawai->no_hp ?></td>
                <td><?= $pegawai->alamat ?></td>
                <td>
                    <button class="btn btn-warning">Detail</button>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
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