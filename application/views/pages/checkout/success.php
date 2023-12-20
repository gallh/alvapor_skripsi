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
				<h5>Checkout Berhasil</h5>
				<div class="card-body">
					<h4><strong>Invoice : <?= $content['invoice'] ?></strong></h4>
					<p>Thank you.</p>
					<br>
					<p>Selesaikan pembayaran:</p>
					<ol>
						<li>Bayar ke <strong>As 085224574210</strong> AL Vapor & Coffee</li>
						<li>Order number <strong><?= $content['invoice'] ?></strong></li>
						<li>Total Pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
					<p>Kirim Bukti Transfer<a href="<?= base_url('myorder/detail/' . $content['invoice']) ?>"> disini</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm"><i class="ni ni-bold-left "></i>Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>