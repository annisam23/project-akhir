<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Fasilitas Kesehatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/dashboard/index">Home</a></li>
                        <li class="breadcrumb-item active">View Data Fasilitas Kesehatan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projek 2</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <div class="row mb-2">
                    <div class="col-sm-12">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?= $faskes->id ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $faskes->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?= $faskes->alamat ?></td>
                                </tr>
                                <tr>
                                    <td>Latlong</td>
                                    <td><?= $faskes->latlong ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis ID</td>
                                    <td><?= $faskes->jenis_id ?></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td><?= $faskes->deskripsi ?></td>
                                </tr>
                                <tr>
                                    <td>Skor Rating</td>
                                    <td><?= $faskes->skor_rating ?></td>
                                </tr>
                                <tr>
                                    <td>Foto1</td>
                                    <td><?= $faskes->foto1 ?></td>
                                </tr>
                                <tr>
                                    <td>Foto2</td>
                                    <td><?= $faskes->foto2 ?></td>
                                </tr>
                                <tr>
                                    <td>Foto3</td>
                                    <td><?= $faskes->foto3 ?></td>
                                </tr>
                                <tr>
                                    <td>Kecamatan ID</td>
                                    <td><?= $faskes->kecamatan_id ?></td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td><?= $faskes->website ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Dokter</td>
                                    <td><?= $faskes->jumlah_dokter ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Pegawai</td>
                                    <td><?= $faskes->jumlah_pegawai ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>