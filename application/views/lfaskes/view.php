<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/admin/home_after_auth">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Detail Faskes
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-sm-10">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?= $lfaskes->id ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?= $lfaskes->nama ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $lfaskes->alamat ?></td>
                        </tr>
                        <tr>
                            <td>Latlong</td>
                            <td><?= $lfaskes->latlong ?></td>
                        </tr>
                        <tr>
                            <td>Jenis ID</td>
                            <td><?= $lfaskes->jenis_id ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $lfaskes->deskripsi ?></td>
                        </tr>
                        <tr>
                            <td>Skor Rating</td>
                            <td><?= $lfaskes->skor_rating ?></td>
                        </tr>
                        <tr>
                            <td>Foto1</td>
                            <td><?= $lfaskes->foto1 ?></td>
                        </tr>
                        <tr>
                            <td>Foto2</td>
                            <td><?= $lfaskes->foto2 ?></td>
                        </tr>
                        <tr>
                            <td>Foto3</td>
                            <td><?= $lfaskes->foto3 ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan ID</td>
                            <td><?= $lfaskes->kecamatan_id ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><?= $lfaskes->website ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Dokter</td>
                            <td><?= $lfaskes->jumlah_dokter ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pegawai</td>
                            <td><?= $lfaskes->jumlah_pegawai ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>