<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Kesehatan</title>
</head>

<body>
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
                            <li class="breadcrumb-item active">Fasilitas Kesehatan</li>
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
                    <h3 class="card-title">Projek 2 </h3>

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
                    <a class="btn btn-primary" href="<?php echo site_url(); ?>/faskes/create" role="button">Create New Faskes</a>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis ID</th>
                                <th>Skor Rating</th>
                                <th>Foto 1</th>
                                <th>Website</th>
                                <th>Jumlah Dokter</th>
                                <th>Jumlah Pegawai</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($list_faskes as $fsks) {
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $fsks->nama ?></td>
                                    <td><?= $fsks->alamat ?></td>
                                    <td><?= $fsks->jenis_id ?></td>
                                    <td><?= $fsks->skor_rating ?></td>
                                    <td><?= $fsks->foto1 ?></td>
                                    <td><?= $fsks->website ?></td>
                                    <td><?= $fsks->jumlah_dokter ?></td>\
                                    <td><?= $fsks->jumlah_pegawai ?></td>
                                    <td>
                                        <a href="faskes/view?id=<?= $fsks->id ?>">View | </a>
                                        <a href="faskes/edit?id=<?= $fsks->id ?>">Edit | </a>
                                        <a href="faskes/delete?id=<?= $fsks->id ?>" onclick="if(!confirm('anda yakin akan menghapus data faskes dengan id <?= $fsks->id ?>?')){return false}">Delete </a>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    2022
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

    </div>
</body>

</html>