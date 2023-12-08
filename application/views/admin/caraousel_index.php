<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-xl-12 mt-5">
	<div class="card" >
		<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
			<h5 class="card-header">File Input</h5>
			<div class="card-body">
				<div class="mb-3">
					<label class="form-label">Judul</label>
					<input type="text" class="form-control" placeholder="Judul Foto" name="judul" required />
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label">Pilih Foto Dengan Ukuran (1:3)</label>
					<input class="form-control" type="file" name="foto">
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php foreach ($caraousel as $aa){ ?>
<div class="col-md-12 mb-3 mt-3">
	<div class="card h-100m">
		<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aa['foto'])?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul'] ?></h5>
			<a href="<?php echo site_url('admin/caraousel/delete_data/'.$aa['foto']);?>" class="btn btn-sm btn-danger"
				onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span class="fa fa-trash"></span></a>
		</div>
	</div>
</div>
<?php } ?>
