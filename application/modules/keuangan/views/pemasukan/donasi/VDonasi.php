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
					<h2 class="content-header-title">Donasi</h2>
				</div>
				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">Donasi</a>
							</li>
							<li class="breadcrumb-item active">
								Daftar donasi
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
								<h4 class="card-title">Daftar Donasi</h4>
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
									<input type="text" class="form-control mb-1" style="width: 20vw; float: right;" placeholder="Cari donatur, tanggal, kegiatan ...">

									<?php
									$tgl = ['20 september 2020', '18 januari 2020', '9 april 2020'];
									$donatur = ['bpk. masbuhin', 'bpk. darmawan', 'ibu uci yulianti'];
									$kegiatan = ['jalan sehat', 'tarik tambang', 'balap sepeda'];
									$nominal = ['2500000', '520000', '3450000']; ?>

									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead class="thead-inverse">
												<tr>
													<th style="width: 1%">#</th>
													<th>Tanggal</th>
													<th>Donatur</th>
													<th>Kegiatan</th>
													<th>Nominal</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php for ($i = 0; $i < count($tgl); $i++) : ?>
													<tr>
														<th scope="row"><?= $i + 1 ?></th>
														<td><?= ucwords($tgl[$i]) ?></td>
														<td><?= ucwords($donatur[$i]) ?></td>
														<td><?= ucwords($kegiatan[$i]) ?></td>
														<td>Rp <?= str_replace(",", ".", number_format($nominal[$i])) ?></td>
														<td style="text-align: center" nowrap>
															<div class="btn-group btn-group-sm" role="group">
																<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Cetak kwitansi" title="" class="btn btn-outline-primary btn-detail">
																	<i class="icon-print"></i>
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
	<!-- script -->
	<?= $this->load->view('../../elements/script'); ?>
	<script>

		$(".btn-tambah").click(function(){
			window.open("<?= site_url('keuangan/donasi/tambah')?>","_self");
		});

	</script>
</body>

</html>