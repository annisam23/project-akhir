<div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/admin/home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Detail Fasilitas Kesehatan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="store-gallery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img :key="photos[activePhoto].id" :src="photos[activePhoto].url" class="w-100 main-image" alt="" />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                            <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto }" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Rumah Sakit Graha Permata Ibu</h1>
                        <div class="owner">Kecamatan Beji</div>
                        <div class="price">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.3
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                        <a class="btn btn-success nav-link px-4 text-white btn-block mb-3" href="<?php echo site_url(); ?>/admin/maps">Maps</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <p>
                            Tujuan informasi laporan ini adalah untuk memberikan gambaran
                            mengenai pelaksanaan upaya peningkatan mutu yang dilakukan di
                            Rumah Sakit Graha Permata Ibu melalui pengukuran indikator
                            mutu.
                        </p>
                        <p>
                            Saat ini Rumah Sakit Grha Permata Ibu telah menentukan
                            indikator mutu prioritas, dimana 45 indikator itu telah
                            memenuhi persyaratan problem prone, high cost, high risk dan
                            high volume. Diharapkan dengan upaya peningkatan mutu yang
                            berkelanjutan Continous Quality Improvement (CQI) yang
                            dilakukan bisa meningkatkan mutu pelayanan dan keselamatan
                            pasien di Rumah Sakit Grha Permata Ibu.
                        </p>
                        <p>
                            Selain itu pula, laporan ini dapat digunakan sebagai
                            Benchmarking bagi Rumah Sakit dalam rangka memenuhi standar
                            akreditasi pokja PMKP akreditasi versi 2012.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-review">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mt-3 mb-3">
                        <h5>Penilaian Customer</h5>
                        <section class="store-cart">
                            <div class="container">
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-borderless table-cart" aria-describedby="Cart">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">User </th>
                                                    <th scope="col">Isi Komentar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $nomor = 1;
                                                foreach ($list_fkomentar as $komen) {
                                                ?>
                                                    <tr>
                                                        <td><?= $nomor ?></td>
                                                        <td><?= $komen->username ?></td>
                                                        <td><?= $komen->isi ?></td>
                                                    </tr>
                                                <?php
                                                    $nomor++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="row">
                            <div class="col-12 col-lg-8 mt-3 mb-1">
                                <h5>Tambahkan Komentar</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-8 text-left">
                                <button type="submit" class="btn btn-signup">
                                    <a href="<?php echo site_url(); ?>/fkomentar/create">Tambahkan</a>
                                </button>
                            </div>
                        </div>
                    </div>
        </section>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="pt-4 pb-2">
                    2022 Copyright Faskes by Fantastic Four. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.slim.min.js"></script>
<script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="<?php echo base_url(); ?>public/vendor/vue/vue.js"></script>
<script>
    var gallery = new Vue({
        el: "#gallery",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 2,
            photos: [{
                    id: 1,
                    url: "<?php echo base_url(); ?>public/images/faskes-details-1.jpg",
                },
                {
                    id: 2,
                    url: "<?php echo base_url(); ?>public/images/faskes-details-2.jpg",
                },
                {
                    id: 3,
                    url: "<?php echo base_url(); ?>public/images/faskes-details-3.jpeg",
                },
                {
                    id: 4,
                    url: "<?php echo base_url(); ?>public/images/faskes-details-4.jpg",
                },
            ],
        },
        methods: {
            changeActive(id) {
                this.activePhoto = id;
            },
        },
    });
</script>
<script src="<?php echo base_url(); ?>public/script/navbar-scroll.js"></script>
</body>

</html>