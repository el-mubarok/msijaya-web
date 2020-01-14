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
					<h2 class="content-header-title">Laporan</h2>
				</div>
				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">
								Laporan
							</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="content-body">

				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="card">
							<div class="card-body collapse in">
								<div class="card-block card-dashboard">

									<button class="btn btn-success mb-1 btn-tambah">	
										Tambah
									</button>
									<input type="text" class="form-control mb-1" style="width: 20vw; float: right;" placeholder="Cari bulan, tahun ...">

									<?php $bulan = ['februari', 'maret', 'april'];
									$tahun = ['2019', '2019', '2019']; ?>

									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead class="thead-inverse">
												<tr>
													<th style="width: 1%">#</th>
													<th>Bulan</th>
													<th>Tahun</th>
													<th style="width: 20%">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php for ($i = 0; $i < count($bulan); $i++) : ?>
													<tr>
														<th scope="row"><?= $i + 1 ?></th>
														<td><?= ucwords($bulan[$i]) ?></td>
														<td><?= ucwords($tahun[$i]) ?></td>
														<td style="text-align: center" nowrap>
															<div class="btn-group btn-group-sm" role="group">
																<button type="button" data-toggle="tooltip" data-placement="top" data-original-title="Detail data" title="" class="btn btn-outline-primary btn-detail">
																	<i class="icon-eye2"></i>
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
			var el = $("#mtambah");
			var thiss = $(this);
			el.modal('show');
			loading("start",thiss);
			el.find(".btn-tambahh").click(function(){
				loading("stop",thiss);
				el.modal('hide');
			});
		});

		function loading(status, el){
			// loader element
			var els = $("<i>").addClass("icon-spinner icon-spin");
			switch(status){
				case 'start':
					el.attr("disabled","disabled");
					el.prepend(els);
				break;
				case 'stop':
					el.find("i.icon-spin").remove();
					el.removeAttr("disabled");
				break;
			}
			console.log(el);
		}

	</script>
</body>

</html>