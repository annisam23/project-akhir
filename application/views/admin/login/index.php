    <!-- Page Content -->
    <div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center">
              <img src="<?php echo base_url(); ?>public/images/masuk-photo.png" alt="" class="w-50 mb-4 mb-lg-none" />
            </div>
            <div class="col-lg-5">
              <h2 class="text-center w-75 mt-4 mb-4">
                Hello!<br />Welcome Back
              </h2>
              <?php echo form_open('admin/login', ['action' => 'post']); ?>
              <div class="form-group">
                <label>Alamat Email</label>
                <input id="email" name="email" type="email" class="form-control w-75" aria-describedby="emailHelp" value="<?php echo set_value('email'); ?>" />
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control w-75" name="password" id="password" />
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
              </div>
              <button class="btn btn-success btn-block w-75 mt-4" type="submit" value="submit">
                Masuk
              </button>
              <a class="btn btn-signup w-75 mt-2" href="<?php echo site_url(); ?>/admin/register">
                Daftar
              </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>