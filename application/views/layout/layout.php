<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $page_title ?>
    </title>
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/datatables/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/datatables/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.js"></script>
    <style>
        .navbar {
            background-color: #030eac;
            color: #fff;
            padding: 0px 20px;
        }

        .navbar a {
            color: #fff;
        }

        .navbar .nav-item a {
            color: #fff !important;
        }

        .navbar .nav-item {
            border-left: 1px solid #35974e;
            padding: 5px;
        }

        .navbar .nav-item:hover,
        .navbar .nav-item.active {
            background-color: #35974e;
        }

        .navbar .nav-item>a.nav-link:hover {
            color: #fff !important;
        }

        .form-label {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <?= $navbar ?>
    <div class="container mt-5">
        <h2><?= $page_title ?></h2>
        <hr>
        <?= $content ?>
    </div>

    <script>
        function show_loading_swal() {
            Swal.fire({
                title: "Please wait...",
                showConfirmButton: false,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });
        }

        function hide_loading_swal() {
            Swal.hideLoading();
        }

        function fail_save(message = "") {
            Swal.fire(
                message == '' ? 'Gagal Menyimpan Data!' : message,
                '',
                'error'
            );
            hide_loading_swal();
        }
    </script>
</body>

</html>