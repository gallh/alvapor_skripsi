<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col-11">
			<h2>List Produk</h2>
		</div>
		<div class="col float-right">
			<a href="<?= base_url('product/add') ?>" class="btn btn-primary btn-sm float-right">
				<i class=""></i>
				Tambah
			</a>
		</div>
	</div>

	<?php $this->load->view('layouts/_alert') ?>

<div class="row mt-3">
		<div class="col">
				<div class="col-12 card-header bg-transparent p-5">
			<table class="table table-transparent text-center">
				<thead class="thead-transparent">
					<tr>
						<th>#</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jenis</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($product as $p) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $p['name'] ?></td>
							<td>Rp. <?= number_format($p['price'], 2, ', ', '.'); ?></td>
							<td><?= ucfirst($p['edition']) ?></td>
							<td>
								<a href="<?= base_url('product/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm">
									<i class="">Update</i>
								</a>
								<a href="<?= base_url('product/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm">
									<i class="">Hapus</i>
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
