    <!-- Page Content -->
    <div class="page-content page-auth mt-4" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 mt-5">
              <img src="<?php echo base_url(); ?>public/images/register-logo.svg" alt="" class="col-lg-12" />

              <?php echo form_open('admin/registration', ['action' => 'post']); ?>
              <div class="form-group">
                <label>Username</label>
                <input name="name" id="name" type="text" class="form-control" value="<?= set_value('name'); ?>" autofocus />
                <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label>Alamat Email</label>
                <input name="email" id="email" type="email" class="form-control" value="<?php echo set_value('email'); ?>" />
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" />
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
              </div>
              <button type="submit" value="Submit" class="btn btn-success btn-block mt-4">
                Daftar Sekarang
              </button>
              <a href="<?php echo site_url(); ?>/admin/login" type="submit" class="btn btn-signup btn-block mt-2">
                Masuk
              </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>