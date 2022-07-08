<?PHP
if (!$this->session->has_userdata('email')) {
  redirect(base_url() . 'index.php/admin/login');
} ?>
<div class="page-content page-cart">
  <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/admin/home/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                List Faskes
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="store-cart">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 table-responsive">
          <table class="table table-borderless table-cart" aria-describedby="Cart">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Fasilitas Kesehatan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Rating</th>
                <th scope="col">Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $nomor = 1;
              foreach ($list_lfaskes as $lfaskes) {
              ?>
                <tr>
                  <td><?= $nomor ?></td>
                  <td><?= $lfaskes->nama ?></td>
                  <td><?= $lfaskes->alamat ?></td>
                  <td><?= $lfaskes->skor_rating ?></td>
                  <td>
                    <a href="lfaskes/view?id=<?= $lfaskes->id ?>">View </a>
                  </td>
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
</div>