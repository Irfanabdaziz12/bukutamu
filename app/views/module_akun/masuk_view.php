<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card bg-transparan col-lg-4 mx-auto">
              <div class="card-body px-4 py-4">
                <div class="text-center">
                  <img src="<?= site_url('_/uploads/sites/'.$this->app->app_logo) ?>" class="w-25 mt-5 mb-5">
                </div>
                <div id="alert" class="alert pt-1 pb-1"></div>
                <?= form_open('masuk/auth', 'id="formMasuk"');?>
                  <div class="form-group">
                    <input type="text" id="user_name" class="form-control bg-light text-dark border-0" placeholder="Username atau Email" required="required" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input type="password" id="user_password" class="form-control bg-light text-dark border-0" placeholder="********" required="required" autocomplete="off">
                  </div>
                  <div class="text-center">
                    <div class="row mt-4">
                      <div class="col-md-6">
                        <a href="<?= base_url('lupa-kata-sandi') ?>" class="btn btn-outline-danger btn-block btn-md pt-2 pb-2 mt-2">Lupa Kata Sandi</a>
                      </div>
                      <div class="col-md-6">
                        <button type="submit" id="submit" name="masuk" class="btn btn-primary btn-md btn-block pt-2 pb-2 mt-2">Masuk</button>
                      </div> 
                    </div>
                  </div>
                  <div class="text-center mt-3">
                    <small class="text-dark">Copyright &copy; 2021 - Buku Tamu v<?= APP_VERSION ?><br/>Bidang TIK | Dinas Komunikasi dan Informatika</small>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->