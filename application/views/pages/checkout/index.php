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
		<!-- Form -->
				<h1>Form Alamat Pengiriman</h1>
	<div class="row">
		<div class="col-12 card-header bg-transparent p-5">
					<form action="<?= base_url('checkout/create') ?>" method="POST">
						<div class="form-group">
							<label>Nama Penerima</label>
							<input type="text" class="form-control" name="name">
							<?= form_error('name', '<small class="text-danger mt-1">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label>Alamat Lengkap</label>
							<textarea class="form-control" name="address" rows="5"></textarea>
							<?= form_error('address', '<small class="text-danger mt-1">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label>Nomor Ponsel</label>
							<input type="number" class="form-control" name="phone">
							<?= form_error('phone', '<small class="text-danger mt-1">', '</small>'); ?>
						</div>
							<button class="btn btn-icon btn-info  btn-sm float-right" type="submit">
								<span class="btn-inner--icon"><i class="ni ni-bold-right "></i></span>
							    <span class="btn-inner--text">Simpan</span>
							</button>
					</form>
				</div>
			</div>
		</div>
		</div>
		<!-- End of Form -->

		<!-- Cart -->	
		<div class="col">
			<div class="row">
				<div class="card mb-3">
					<h5 class="card-header">Keranjang</h5>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th>Produk</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($cart as $c) : ?>
									<tr>
										<td><?= $c['name'] ?></td>
										<td>Rp. <?= number_format($c['price'], 2, ',', '.') ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Total</th>
									<th>Rp. <?= number_format(array_sum(array_column($cart, 'subtotal')), 2, ',', '.') ?>,-</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- End of cart -->
	</div>
</div>
