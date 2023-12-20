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
        <div class="col-lg-6 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
		<!-- Form -->
				<h5><strong>Detail Pesanan #<?= $order['invoice'] ?></strong></h5>
				<div class="card-body">
					<ul>
						<li>Tanggal : <?= $order['date'] ?></li>
						<li>Nama    : <?= $order['name'] ?></li>
						<li>HP : <?= $order['phone'] ?></li>
						<li>Alamat  : <?= $order['address'] ?></li>
						<li>Status  : 
							<?php if($order['status'] == 'menunggu') : ?>
								<span class="badge badge-primary"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'dibayar') : ?>
								<span class="badge badge-warning text-light"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'dikirim') : ?>
								<span class="badge badge-info"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'dibatalkan') : ?>
								<span class="badge badge-danger"><?= $order['status'] ?></span>
							<?php endif; ?>
						</li>
					</ul>

					<hr>
					<div class="text-center text-info">
						<small class="text-dark">Jika butuh Bantuan Hubungi.</small>
						<br>
						<small>galih.01@students@amikom.ac.id | 085234574210</small>
					</div>

					<?php if($order['status'] == 'menunggu') : ?>
						<form action="<?= base_url('myorder/confirm/' .  $order['invoice']) ?>" method="POST">
							
							<button type="submit" class="btn btn-info btn-sm float-right">
								<i class="ni ni-check-bold"></i>
								Konfirmasi
							</button>
	
						</form>
					<?php endif ?>

				</div>
			</div>
		</div>
	</div>
</div>
