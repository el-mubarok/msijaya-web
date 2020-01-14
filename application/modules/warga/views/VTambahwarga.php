<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<!-- head -->
<?= $this->load->view('../../elements/head'); ?>
<style>.form-group *{display: block}</style>
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
					<h2 class="content-header-title">Tambah Warga</h2>
				</div>
				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">Warga</a>
							</li>
							<li class="breadcrumb-item active">
								Tambah Warga
							</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="content-body">

				<div class="row">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-body">
								<div class="card-block">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<label>Nama Lengkap</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<label>Kontak</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<label>Alamat Asal</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Alamat MSI</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Tipe Warga</label>
												<div>
													<label class="display-inline-block custom-control custom-radio">
														<input type="radio" name="rtipe" value="tetap" class="custom-control-input" checked>
														<span class="custom-control-indicator"></span>
														<span class="custom-control-description ml-0">Warga Tetap</span>
													</label> <br>
													<label class="display-inline-block custom-control custom-radio">
														<input type="radio" name="rtipe" value="kontrak" class="custom-control-input">
														<span class="custom-control-indicator"></span>
														<span class="custom-control-description ml-0">Warga Kontrak</span>
													</label>
												</div>
											</div>
											<div class="form-group">
												<label>Foto KTP</label>
												<img src="<?= base_url('app-assets/images/ktp_vect.png')?>" alt="">
												<button class="btn btn-primary mt-1">Pilih foto</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<small class="text-muted">Semua kolom diatas harus diisi. <br> Kecuali foto ktp adalah opsi. <br> Penghuni dapat mengisikan foto ktp.</small>
								<button class="btn btn-primary float-xs-right">Simpan</button>
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
</body>

</html>