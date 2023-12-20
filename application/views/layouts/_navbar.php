<nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-gradient-primary py-2 py-lg-3 pt-lg-3">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= base_url('home') ?>">
			<img src="<?= base_url() ?>/images/logo/alvapor.png" width="120" height="67" class="d-inline-block align-top" alt="logo" loading="lazy">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<?php if($this->session->login == TRUE) : ?>
					<!-- Jika yg login user -->
					<?php if($this->session->userdata('role') == 2) : ?>
						

						<a class="nav-item nav-link mr-4 active" href="<?= base_url('cart') ?>">
							<i class="ni ni-cart"></i>
						</a>

						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ni ni-single-02"></i>
							</a>
							<div class="dropdown-menu  dropdown-menu-right " aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('profile') ?>">
									<i class="ni ni-circle-08"></i>
									Profile
								</a>
								<a class="dropdown-item" href="<?= base_url('myorder') ?>">
									<i class="ni ni-bag-17"></i>
									Pesanan Saya
								</a>
								<a class="dropdown-item" href="<?= base_url('profile/password') ?>">
									<i class="ni ni-lock-circle-open"></i>
									Ganti Password
								</a>
							<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="ni ni-user-run"></i>
									Logout
								</a>
							</div> 
						</li>
					<!-- Jika admin -->
					<?php else : ?>
						<li class="nav-item dropdown">
				            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                <i class="ni ni-ungroup"></i>
				            </a>
							<div class="dropdown-menu  dropdown-menu-right " aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?= base_url('banner') ?>">Banner</a>
								<a class="dropdown-item" href="<?= base_url('product') ?>">Produk</a>
								<a class="dropdown-item" href="<?= base_url('order') ?>">Order</a>
								<a class="dropdown-item" href="<?= base_url('user') ?>">Users</a>
							</div>
						</li>


						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ni ni-settings-gear-65"></i>
							</a>
							<div class="dropdown-menu  dropdown-menu-right " aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('profile') ?>">
									<i class="ni ni-single-02"></i>
									Profil Saya
								</a>
								<a class="dropdown-item" href="<?= base_url('profile/password') ?>">
									<i class="ni ni-key-25"></i>
									Ubah Password 
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="ni ni-user-run"></i>
									Logout
								</a>
							</div>
						</li>
						
					<?php endif ?>
				<?php else: ?>
					<a class="nav-item nav-link mr-3 active" href="<?= base_url('login') ?>">Login</a>
					<a class="nav-item nav-link mr-3 active" href="<?= base_url('register') ?>">Register</a>
				<?php endif ?>
			</div>
		</div>
	</div>
</nav>
