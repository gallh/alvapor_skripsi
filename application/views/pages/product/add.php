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
            
			<h1>Tambah Produk</h1>
		</div>

			<?= form_open_multipart(base_url('product/add')) ?>
			<div class="row">
		<div class="col-12 card-header bg-transparent p-5">
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label font-weight-bold">Nama Produk</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name">
						<?= form_error('name', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div> 
				<div class="row">
					<div class="col-5 offset-2">
						<div class="form-group">
							<label class="font-weight-bold">Harga</label>
							<input type="number" class="form-control" name="price">
							<?= form_error('price', '<small class="form-text text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="col-5">
						<div class="form-group">
							<label class="font-weight-bold"></label>
							<select class="form-control" name="edition">
								<option value="e-liquid" selected>E-Liquid</option>
								<option value="vape kits" selected> Vape Kits</option>
								<option value="pod kits" selected>Pod Kits</option>
								<option value="tank" selected>Tank</option>
								<option value="coils" selected>Coils</option>
								<option value="accessories" selected>Accessories</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Keterangan</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="summernote" name="description" rows="3"></textarea>
						<?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>	
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Kondisi</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="summernote2" name="requirements" rows="3"></textarea>
						<?= form_error('requirements', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label font-weight-bold">Image</label>
					<br>
					<div class="col-sm-10">
						<input name="image" type="file" class="form-control-file">
						<?php if($this->session->flashdata('image_error')) :  ?>
							<small class="form-text text-danger">
								<?= $this->session->flashdata('image_error') ?>
							</small>
						<?php endif ?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="<?= base_url('product') ?>" class="btn btn-secondary btn-sm">
							<i class="ni ni-bold-left"></i>
							Kembali
						</a>
						<button type="submit" class="btn btn-info btn-sm float-right">
							<i class="ni ni-check-bold"></i>
							Simpan
						</button>
					</div>
				</div>
			<?= form_close() ?>			
		</div>
	</div>
</div>

