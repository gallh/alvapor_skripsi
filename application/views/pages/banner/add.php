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
            
			<h1>Tambah Banner</h1>
		</div>


			<?= form_open_multipart(base_url('banner/add')) ?>
			<div class="row">
		<div class="col-12 card-header bg-transparent p-5">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Title</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="head">
						<?= form_error('head', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Deskripsi</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="content">
						<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Text Color</label>
					<div class="col-sm-10">
						<select class="form-control" name="text_color">
							<option value="text-dark">Black</option>
							<option value="text-light">White</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Link Button</label>
					<div class="col-sm-10">
						<select class="form-control" name="product_id">
							<?php foreach($games as $g) : ?>
								<option value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Gambar</label>
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
						<a href="<?= base_url('banner') ?>" class="btn btn-secondary btn-sm">
							<i class="ni ni-bold-left"></i>
							Kembali
						</a>
						<button type="submit" class="btn btn-info btn-sm float-right">
							<i class="ni ni-check-bold"></i>
							Simpan
						</button>
					</div>
				</div>
				</div>
				</div>
			<?= form_close() ?>			
		</div>
	</div>
</div>

