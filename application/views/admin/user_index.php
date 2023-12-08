<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<div class="mt-3 mb-3">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Tambah User
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('admin/user/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Nama</label>
								<input type="text" class="form-control" placeholder="Nama" name="nama" required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Username</label>
								<input type="text" class="form-control" placeholder="username" name="username"
									required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Password</label>
								<input type="password" class="form-control" placeholder="password" name="password"
									required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<label class="form-label">Level</label>
								<select name="level" class="form-control">
									<option value="Admin">Admin</option>
									<option value="Kontributor">Kontributor</option>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
			</form>
		</div>
	</div>
</div>

<div class="white_shd full margin_bottom_30 mt-5">
	<div class="full graph_head">
		<div class="heading1 margin_0">
			<h2>Data Pengguna</h2>
		</div>
	</div>
	<div class="table_section padding_infor_info">
		<div class="table-responsive-sm">
			<table class="table">
				<thead>
					<tr>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php foreach($user as $aa) { ?>
					<tr>
						<td><?= $aa['username'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['level'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
									class="fa fa-trash"></span></a>
							<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
								data-target="#edit<?= $aa['id_user'] ?>">
								<span class="fa fa-pencil-square-o"></span>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<form action="<?= base_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Edit Nama User</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama</label>
														<input type="text" class="form-control"
															value="<?= $aa['nama'] ?>" name="nama" />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Username</label>
														<input type="text" class="form-control"
															value="<?= $aa['username'] ?>" name="username" readonly />
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
									</form>
								</div>
							</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
