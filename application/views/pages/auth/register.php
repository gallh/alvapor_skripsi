<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-6 pt-lg-7">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Selamat Datang!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
            

             
                <form action="<?= base_url('register/register') ?>" method="POST" class="form-signin">
                   <?php  $this->load->view('layouts/_alert') ?>
                  <div class="text-center">
               <img class="mb-2" src="<?= base_url() ?>images/logo/icon.png" width="190" height="135">
            </div>

        
                      <div class="text-center text-muted mb-4">
                <small>Please Login</small>
                 
              </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                    <?= form_error('name', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <?= form_error('email', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" class="form-control"  name="password" placeholder="Password" required>
                    <?= form_error('password', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
                  </div>
                </div>
                  <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" class="form-control"  name="password2" placeholder="Confirmation Password" required>
                    <?= form_error('password2', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
                  </div>
                </div>
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">Setuju Dengan <a href="#!">Privacy Policy</a></span>
                      </label>
                    </div>
             
                <div class="text-center">
                  <button class="btn btn-primary my-4" type="submit">Buat Akun</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>