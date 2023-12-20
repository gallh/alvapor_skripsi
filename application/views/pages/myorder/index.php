<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col-11">
			<h2>List Produk Pesanan Saya</h2>
		</div>
	</div>

	<?php $this->load->view('layouts/_alert') ?>

<div class="row mt-3">
		<div class="col">
				<div class="col-12 card-header bg-transparent p-5">
			<table class="table table-transparent text-center">
				<thead class="thead-transparent">
							<tr>
								<th>Invoice</th>
								<th>Tanggal</th>
								<th>Total</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($orders as $o) : ?>
								<tr>
									<td><strong><a href="<?= base_url('myorder/detail/' . $o['invoice']) ?>"><?= $o['invoice'] ?></a></strong></td>
									<td><?= $o['date'] ?></td>
									<td>Rp. <?= number_format($o['total'], 2, ',', '.') ?></td>
									<td>
										<?php if($o['status'] == 'menunggu') : ?>
											<span class="badge badge-primary"><?= $o['status'] ?></span>
										<?php elseif($o['status'] == 'dibayar') : ?>
											<span class="badge badge-warning text-light"><?= $o['status'] ?></span>
										<?php elseif($o['status'] == 'dikirim') : ?>
											<span class="badge badge-info"><?= $o['status'] ?></span>
										<?php elseif($o['status'] == 'dibatalkan') : ?>
											<span class="badge badge-danger"><?= $o['status'] ?></span>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
