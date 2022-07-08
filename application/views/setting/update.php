        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
                <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                    &laquo; Menu
                </button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>/admin/dashboard_settings" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>public/images/icon-user.jpg" alt="" class="rounded-circle mr-2 profile-picture" />
                                Hi, Fulan
                            </a>
                        </li>
                    </ul>

                    <!-- Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none mt-3">
                        <li class="nav-item">
                            <a class="nav-link d-inline-block" href="<?php echo site_url(); ?>/admin/home">
                                Home
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="section-content section-dashboard-home" data-aos="fade-up">
                <div class="container-fluid">
                    <div class="dashboard-heading">
                        <h2 class="dashboard-title">Pengaturan Akun</h2>
                        <p class="dashboard-subtitle">Perbarui profil Anda saat ini</p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-12">
                                <form action="">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="storeName">Nama Lengkap</label>
                                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="Fulan Wa Fulanah" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="category">Alamat Email</label>
                                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="email@gmail.com" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password" aria-describedby="emailHelp" name="password" value="********" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <input type="text" class="form-control" id="status" aria-describedby="emailHelp" name="status" value="User Biasa" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-right">
                                                    <button type="submit" class="btn btn-success px-5">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.slim.min.js"></script>
        <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        </body>

        </html>