<div class="container">
	<div class="row mt-4 mb-3">
		<div class="col-11">
			<h2>List Pengguna</h2>
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
						<th>Nama</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($users as $user) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $user['name'] ?></td>
							<td><?= $user['email'] ?></td>
							<td>
								<a href="<?= base_url('user/delete/' . $user['id']) ?>" class="btn btn-danger btn-sm">
									<i class="#">Hapus User</i>
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
