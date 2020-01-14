<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<!-- head -->
<?= $this->load->view('../../elements/head'); ?>
<style>
	.list-group-item{text-transform: capitalize;}
</style>
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
					<h2 class="content-header-title">Aktifitas Petugas</h2>
				</div>
				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">Petugas</a>
							</li>
							<li class="breadcrumb-item active">
								Aktifitas petugas
							</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="content-body">

				<div class="row">
					<div class="col-xs-12 mt-1">
						<select name="" id="name_select2" style="width: 100%" class="form-control select2">
							<option></option>
						</select>

						<h2 class="text-muted text-xs-center mt-3" id="unchoosemsg">
							Silahkan pilih nama petugas untuk menampilkan detail aktifitas.
						</h2>

						<div class="card mt-3" id="carddetailres" style="display: none">
							<div class="card-body">
								<div class="card-block">
									<div class="float-xs-left">
										<h4 class="card-title">Bpk. Darmawan</h4>
										<h6 class="card-subtitle text-muted">Petugas Penarikan Iuran</h6>
									</div>

									<select class="form-control float-xs-right" id="thn_select" style="width: 30%">
										<option value="all">Semua Tahun</option>
										<option value="2019">2019</option>
										<option value="2018">2018</option>
									</select>
								</div>
								<div class="card-block" id="detailres">
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
	<?= $this->load->view('modal/modal_aktifitas'); ?>
	<?= $this->load->view('modal/modal_switch'); ?>
	<?= $this->load->view('modal/modal_tambah'); ?>
	<!-- script -->
	<?= $this->load->view('../../elements/script'); ?>
	<?= $this->load->view('aktifitas.script.php'); ?>
</body>

</html>