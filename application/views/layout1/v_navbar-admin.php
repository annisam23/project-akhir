    <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down" aria-label="Navbar">
      <div class="container">
        <a class="navbar-brand" href="<?= site_url(); ?>/admin/home_after_auth">
          <img src="<?php echo base_url(); ?>public/images/logo.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url(); ?>/admin/home_after_auth">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url(); ?>/admin/categories_after_auth">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url(); ?>lfaskes">List Faskes</a>
            </li>
          </ul>

          <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?= site_url(); ?>/admin/dashboard-settings" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo base_url(); ?>public/images/icon-user.jpg" alt="" class="rounded-circle mr-2 profile-picture" />
                <?= $users['username']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= site_url(); ?>/dashboard/index">Dashboard</a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= site_url(); ?>/admin/home">Keluar</a>
              </div>
            </li>
          </ul>

          <!-- Mobile Menu -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url(); ?>/admin/dashboard-settings">
                Hallo!
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block" href="#"> Keluar </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>