<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col-11">
			<h2>Order</h2>
		</div>
	<?php $this->load->view('layouts/_alert') ?>

	<div class="table-responsive">
		<div class="col">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
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
							<td><a href="<?= base_url('order/detail/' . $o['id']) ?>"><strong><?= $o['invoice'] ?></strong></a></td>
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
				