<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<!-- head -->
<?= $this->load->view('../../elements/head'); ?>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

	<!-- navbar-fixed-top-->
	<?= $this->load->view('../../elements/navbar'); ?>
	<!-- main menu / sidebar-->
	<?= $this->load->view('../../elements/sidebar'); ?>
	<!-- / main menu / sidebar-->

	<!-- content -->
	<div class="app-content content container-fluid" style="min-height: 100%;">
		<div class="content-wrapper">

			<div class="content-header row">
				<div class="content-header-left col-md-6 col-xs-12 mb-1">
					<h2 class="content-header-title">Warga</h2>
				</div>
				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">Warga</a>
							</li>
							<li class="breadcrumb-item active">
								Warga tetap
							</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="content-body">

				<div class="row">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Daftar Warga Tetap</h4>
								<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="card-body collapse in">
								<div class="card-block card-dashboard">

									<button class="btn btn-success mb-1 btn-tambah">Tambah</button>
									<input type="text" class="form-control mb-1" style="width: 20vw; float: right;" placeholder="Cari nama, alamat, kontak ...">

									<?php $name = ['bpk. masbuhin', 'bpk. darmawan', 'ibu uci yulianti'];
									$alamat = ['rt 03. rw 05. blok c no. 35', 'rt 02. rt 04. blok a no. 12', 'rt 01. rw 02. blok d no. 10'];
									$kontak = ['083845556444', '083851327000', '083846761000']; ?>

									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead class="thead-inverse">
												<tr>
													<th style="width: 1%">#</th>
													<th>Nama</th>
													<th>Alamat</th>
													<th>Kontak</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php for ($i = 0; $i < count($name); $i++) : ?>
													<tr>
														<th scope="row"><?= $i + 1 ?></th>
														<td><?= ucwords($name[$i]) ?></td>
														<td><?= ucwords($alamat[$i]) ?></td>
														<td><?= $kontak[$i]?></td>
														<td style="text-align: center" nowrap>
															<div class="btn-group btn-group-sm" role="group">
																<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Lihat detail" title="" class="btn btn-outline-primary btn-detail">
																	<i class="icon-eye4"></i>
																</button>
																<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Edit" title="" class="btn btn-outline-success btn-edit">
																	<i class="icon-edit2"></i>
																</button>
																<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Hapus data" title="" class="btn btn-outline-danger btn-hapus">
																	<i class="icon-trash2"></i>
																</button>
															</div>
														</td>
													</tr>
												<?php endfor; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- end content -->

	<!-- footer -->
	<?= $this->load->view('../../elements/footer'); ?>
	<!-- modal -->
	<?= $this->load->view('modal/modal.remove.php'); ?>
	<?= $this->load->view('modal/modal.detail.php'); ?>
	<?= $this->load->view('modal/modal.edit.php'); ?>
	<!-- script -->
	<?= $this->load->view('../../elements/script'); ?>
	<?= $this->load->view(($_GET['t'] == 'tetap' ? 'script.tetap.php' : ($_GET['t'] == 'kontrak' ? 'script.kontrak.php' : '' ))); ?>
</body>

</html>