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
					<h2 class="content-header-title">Petugas</h2>
				</div>
				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">Petugas</a>
							</li>
							<li class="breadcrumb-item active">
								List petugas
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
								<h4 class="card-title">Daftar Petugas</h4>
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
									<input type="text" class="form-control mb-1" style="width: 20vw; float: right;" placeholder="Cari nama, username, ...">

									<?php $name = ['bpk. masbuhin','bpk. darmawan','ibu uci yulianti'];
												$username = ['masbuhin','darmawan','uciyulianti'];
												$status = ['active','pending','inactive'];?>

									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead class="thead-inverse">
												<tr>
													<th style="width: 1%">#</th>
													<th>Nama</th>
													<th>Username</th>
													<th>Jabatan</th>
													<th>Masa Jabatan</th>
													<th>Status</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php for($i=0;$i<count($name);$i++):?>
												<tr>
													<th scope="row"><?= $i+1?></th>
													<td><?= ucwords($name[$i])?></td>
													<td><?= ucwords($username[$i])?></td>
													<td>Petugas Penarikan Iuran</td>
													<td>
														<span class="tag tag-default">13 / Maret / 2019</span> 
														<small><i class="icon-arrow-right3"></i></small> 
														<span class="tag tag-primary">19 / Desember / 2019</span>
													</td>
													<td>
														<span class="tag tag-<?= ($status[$i] == 'pending' ? 'warning' : ($status[$i] == 'active' ? 'success' : ($status[$i] == 'inactive' ? 'danger' : '' )))?>">
															<i class="<?= ($status[$i] == 'pending' ? 'icon-clock-o' : ($status[$i] == 'active' ? 'icon-check' : ($status[$i] == 'inactive' ? 'icon-close2' : '' )))?>"></i> 
															<?= ucwords($status[$i])?></span>
													</td>
													<td style="text-align: center" nowrap>
														<div class="btn-group btn-group-sm" role="group">
															<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Aktifitas" title="" class="btn btn-outline-primary btn-aktifitas">
																<i class="icon-history"></i>
															</button>
															<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Aktifkan" title="" class="btn btn-outline-success btn-aktif">
																<i class="icon-checkmark2"></i>
															</button>
															<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Non-aktifkan" title="" class="btn btn-outline-danger btn-nonaktif">
																<i class="icon-cross"></i>
															</button>
														</div>
													</td>
												</tr>
												<?php endfor;?>
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
	<?= $this->load->view('modal/modal_aktifitas');?>
	<?= $this->load->view('modal/modal_switch');?>
	<?= $this->load->view('modal/modal_tambah');?>
	<!-- script -->
	<?= $this->load->view('../../elements/script'); ?>
	<?= $this->load->view('script');?>
</body>

</html>