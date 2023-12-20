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
				<?php $this->load->view('layouts/_alert') ?>
				<h4 class="card-title"><strong>Konfirmasi Pembayaran #<?= $order['invoice'] ?></strong></h4>
				<div class="card-body">
					<?= form_open_multipart(base_url('myorder/confirm/' . $order['invoice'])) ?>
						<input type="hidden" name="orders_id" value="<?= $order['id'] ?>">
						<div class="form-group">
							<label>Invoice</label>
							<input type="text" class="form-control" name="invoice" value="<?= $order['invoice'] ?>" readonly>
						</div>
						<div class="form-group">
							<label>Nama Akun</label>
							<input type="text" class="form-control" name="account_name">
							<?= form_error('account_name', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Nomor Akun</label>
							<input type="text" class="form-control" name="account_number">
							<?= form_error('account_number', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Nominal</label>
							<input type="text" class="form-control" name="nominal">
							<?= form_error('nominal', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<textarea class="form-control" name="note" rows="3"></textarea>
						</div>

						<div class="form-group">
							<label>Bukti Transfer</label>
							<input name="image" type="file" class="form-control-file">
							<?php if($this->session->flashdata('image_error')) :  ?>
								<small class="form-text text-danger">
									<?= $this->session->flashdata('image_error') ?>
								</small>
							<?php endif ?>
						</div>

						<button type="submit" class="btn btn-info btn-sm float-right">
							<i class="ni ni-bold-right"></i>
							Kirim
						</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
