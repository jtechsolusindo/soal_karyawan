<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #ffdc20;font-weight:bold">

            UJIAN KARYAWAN
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                <?php for ($no = 1; $no <= 5; $no++) { ?>
                    <li class="nav-item  <?= $kode_menu == "soal$no" ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url() . "soal$no" ?>">Soal No <?= $no ?></a>
                    </li>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav>