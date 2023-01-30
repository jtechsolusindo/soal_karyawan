<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Konsumen</title>
    <style>
        table.table {
            border-collapse: collapse;
            width: 100%;
            font-size: 10px;
        }

        table.table,
        table.table th,
        table.table td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h2>LAPORAN KONSUMEN</h2>
    </center>
    <table class="table">
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
</body>

</html>