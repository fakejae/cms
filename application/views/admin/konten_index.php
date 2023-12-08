<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<div class="mt-3 mb-3">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Tambah Konten
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Judul</label>
								<input type="text" class="form-control" placeholder="Nama" name="judul" required />
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Kategori</label>
								<select name="id_kategori" class="form-control">
									<?php foreach($kategori as $aa) { ?>
									<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Keterangan</label>
								<textarea name="keterangan" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Foto</label>
								<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>

<div class="white_shd full margin_bottom_30 mt-5">
	<div class="full graph_head">
		<div class="heading1 margin_0">
			<h2>Kategori Konten</h2>
		</div>
	</div>
	<div class="table_section padding_infor_info">
		<div class="table-responsive-sm">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Kategori Konten</th>
						<th>Tanggal</th>
						<th>Kreator</th>
						<th>foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php $no=1; foreach($konten as $aa) { ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $aa['judul'] ?></td>
						<td><?= $aa['nama_kategori'] ?></td>
						<td><?= $aa['tanggal'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td>
							<a href="<?= base_url('assets/upload/konten/'.$aa['foto'])?>" target="_blank">
								<span class="fa fa-search"></span>Lihat Foto
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
									class="fa fa-trash"></span></a>
							<!-- Button trigger modal -->
								<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
									data-target="#konten<?= $no ?>"><span class="fa fa-pencil"></span>
								</button>

								<!-- Modal -->
								<div class="modal fade" id="konten<?= $no ?>" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<form action="<?= base_url('admin/konten/update') ?>" method="post"
											enctype='multipart/form-data'>
											<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= $aa['judul'] ?></h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Judul</label>
															<input type="text" class="form-control" value="<?= $aa['judul'] ?>"
																name="judul" />
														</div>
													</div>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Kategori</label>
															<select name="id_kategori" class="form-control">
																<?php foreach($kategori as $uu) { ?>
																<option 
																<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; } ?>
																value="<?= $uu['id_kategori'] ?>">
																	<?= $uu['nama_kategori'] ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Keterangan</label>
															<textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
														</div>
													</div>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Foto</label>
															<input type="file" name="foto" class="form-control"
																accept="image/png, image/jpeg">
														</div>
													</div>
												</div>
												<div class="modal-body">
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary"
															data-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</div>
										</form>
									</div>
								</div>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
