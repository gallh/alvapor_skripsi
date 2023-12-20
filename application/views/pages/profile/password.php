    <div class="header bg-gradient-primary py-7 py-lg-6 pt-lg-7">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--9 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
            
			<h1>Ubah Password</h1>
		</div>

	<?php $this->load->view('layouts/_alert') ?>

	<div class="row">
		<div class="col-12 card-header bg-transparent p-5">
			<form action="<?= base_url('profile/password') ?>" method="post">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Password Baru</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password">
						<?= form_error('password', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Konfirmasi Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password2">
						<?= form_error('password2', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
					</div>
				</div>

				<button class="btn btn-icon btn-warning  btn-sm float-right" type="submit">
					<span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
				    <span class="btn-inner--text">Lanjut</span>
				</button>
			</form>
		</div>
	</div>
</div>