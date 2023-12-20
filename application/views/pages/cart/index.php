<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col-11">
			<h2>Keranjang</h2>
		</div>
					
					<!-- Alert -->
					<?php $this->load->view('layouts/_alert') ?>
					<!-- Alert -->

					<!-- Jika cart kosong -->
					<?php if(empty($product)) : ?>
						<div class="alert alert-warning" role="alert">
							Keranjang Kosong.
						</div>
					<?php else : ?>
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
								<tr>
									<th>#</th>
									<th>Produk</th>
									<th>Subtotal</th>
									<th>Menu</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($product as $p) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td>
											<img src="<?= base_url('/images/game/' . $p['image']) ?>" style="width:180px; height:250px">
										</td>
										<td>Rp. <?= number_format($p['subtotal'], 2, ', ', '.') ?></td>
										<td>
											<a class="btn btn-danger btn-sm" href="<?= base_url('cart/delete/' . $p['id']) ?>">
												<i class="">Hapus</i>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							<!-- Total -->
							<tr class="bg-success text-light">
								<td colspan="3" class="text-left"><strong>Total:</strong></td>
								<td><strong>Rp. <?= number_format(array_sum(array_column($product, 'subtotal')), 2, ', ', '.') ?></strong></td>
							</tr>
							</tbody>
						</table>
					<?php endif ?>

				</div>
				<div class="card-footer text-muted">
					<a href="<?= base_url('home') ?>" class="btn btn-secondary btn-sm">
						<i class="ni ni-bold-left"></i>
						Kembali
					</a>
					<?php if($product) : ?>
						<a href="<?= base_url('checkout') ?>" class="btn btn-info btn-sm float-right">
							Bayar
							<i class="ni ni-bold-right"></i>
						</a>
					<?php endif ?>
				</div>
			</div>

		</div>
	</div>
</div>
