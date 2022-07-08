<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/dashboard/index">Home</a></li>
                        <li class="breadcrumb-item active">Form update Faskes</li>
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
                <h3 class="card-title">Update Data Faskes</h3>

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
                <?php
                $hidden = ['idedit' => $faskesedit->id];
                ?>
                <?php echo form_open('faskes/save', '', $hidden); ?>
                <div class="form-group row">
                    <label for="id" class="col-4 col-form-label">id</label>
                    <div class="col-8">
                        <input id="id" name="id" type="text" value="<?= $faskesedit->id ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" value="<?= $faskesedit->nama ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-angle-double-down"></i>
                                </div>
                            </div>
                            <input id="alamat" name="alamat" value="<?= $faskesedit->alamat ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="latlong" class="col-4 col-form-label">Latlong</label>
                    <div class="col-8">
                        <input id="latlong" value="<?= $faskesedit->latlong ?>" name="latlong" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_id" class="col-4 col-form-label">Jenis ID</label>
                    <div class="col-8">
                        <input id="jenis_id" value="<?= $faskesedit->jenis_id ?>" name="jenis_id" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-book"></i>
                                </div>
                            </div>
                            <input id="deskripsi" value="<?= $faskesedit->deskripsi ?>" name="deskripsi" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="skor_rating" class="col-4 col-form-label">Skor Rating</label>
                    <div class="col-8">
                        <input id="skor_rating" value="<?= $faskesedit->skor_rating ?>" name="skor_rating" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto1" class="col-4 col-form-label">aFoto 1</label>
                    <div class="col-8">
                        <input id="foto1" value="<?= $faskesedit->foto1 ?>" name="foto1" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto2" class="col-4 col-form-label">Foto 2</label>
                    <div class="col-8">
                        <input id="foto2" value="<?= $faskesedit->foto2 ?>" name="foto2" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto3" class="col-4 col-form-label">Foto 3</label>
                    <div class="col-8">
                        <input id="foto3" value="<?= $faskesedit->foto3 ?>" name="foto3" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan_id" class="col-4 col-form-label">Kecamatan ID</label>
                    <div class="col-8">
                        <input id="kecamatan_id" value="<?= $faskesedit->kecamatan_id ?>" name="kecamatan_id" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="website" class="col-4 col-form-label">Website</label>
                    <div class="col-8">
                        <input id="website" value="<?= $faskesedit->website ?>" name="website" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_dokter" class="col-4 col-form-label">Jumlah Dokter</label>
                    <div class="col-8">
                        <input id="jumlah_dokter" value="<?= $faskesedit->jumlah_dokter ?>" name="jumlah_dokter" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_pegawai" class="col-4 col-form-label">Jumlah Pegawai</label>
                    <div class="col-8">
                        <input id="jumlah_pegawai" value="<?= $faskesedit->jumlah_pegawai ?>" name="jumlah_pegawai" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
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