<?PHP
if (!$this->session->has_userdata('email')) {
  redirect(base_url() . 'index.php/admin/login');
} ?>
<!-- Page Content -->
<div class="page-content page-categories">
  <section class="store-trend-categories">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Semua Kategori</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="<?php echo base_url(); ?>public/images/categories-rs.svg" alt="Gadgets Categories" class="w-100" />
            </div>
            <p class="categories-text">Rumah Sakit</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="<?php echo base_url(); ?>public/images/categories-klinikumum.svg" alt="Furniture Categories" class="w-100" />
            </div>
            <p class="categories-text">Klinik Umum</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="<?php echo base_url(); ?>public/images/categories-apotek.svg" alt="Makeup Categories" class="w-100" />
            </div>
            <p class="categories-text">Apotek</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="<?php echo base_url(); ?>public/images/categories-tooth.svg" alt="Sneaker Categories" class="w-100" />
            </div>
            <p class="categories-text">Klinik Gigi</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="<?php echo base_url(); ?>public/images/categories-puskesmas.svg" alt="Tools Categories" class="w-100" />
            </div>
            <p class="categories-text">Puskesmas</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img src="<?php echo base_url(); ?>public/images/categories-more.svg" alt="Baby Categories" class="w-100" />
            </div>
            <p class="categories-text">Lainnya</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Semua Faskes</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/rs-graha-permata-ibu.jpg');
                    "></div>
            </div>
            <div class="products-text">RS Graha Permata Ibu</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.3
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/rs-hermina-depok.avif');
                    "></div>
            </div>
            <div class="products-text">RSU Hermina Depok</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star-o"></i> 4.0
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/audy-dental-depok.jpg');
                    "></div>
            </div>
            <div class="products-text">Audy Dental Depok</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star"></i> 5.0
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/puskesmas-depok-utara.png');
                    "></div>
            </div>
            <div class="products-text">Puskesmas Depok Utara</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.4
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/kimia-farma-depok.jpg');
                    "></div>
            </div>
            <div class="products-text">Apotek Kimia Farma Depok</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i></i><i class="fa fa-star-o"></i> 3.8
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/klinik-mutiara-depok.jpg');
                    "></div>
            </div>
            <div class="products-text">Apotek Mutiara Depok</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.7
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/manar-medika-depok.jpg');
                    "></div>
            </div>
            <div class="products-text">Klinik Manar Medika</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i> 4.9
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <a class="component-products d-block" href="<?php echo site_url(); ?>/fkomentar">
            <div class="products-thumbnail">
              <div class="products-image" style="
                      background-image: url('<?php echo base_url(); ?>public/images/rsud-depok.jpg');
                    "></div>
            </div>
            <div class="products-text">RSUD Kota Depok</div>
            <div class="products-price">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-empty"></i><i class="fa fa-star-o"></i> 3.1
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>