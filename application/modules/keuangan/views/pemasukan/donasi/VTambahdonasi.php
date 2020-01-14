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
					<h2 class="content-header-title">Tambah Donasi</h2>
				</div>
				<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
					<div class="breadcrumb-wrapper col-xs-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index.html">Donasi</a>
							</li>
							<li class="breadcrumb-item">
								<a href="<?= site_url('keuangan/donasi')?>">Daftar donasi</a>
							</li>
							<li class="breadcrumb-item active">
								Tambah donasi
							</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="content-body">

				<div class="row">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-body collapse in">
								<div class="card-block card-dashboard">
									<div class="row">
										<div class="col-xs-12">

											<div class="form-group">
												<label>Tanggal</label>
												<div class="position-relative has-icon-left">
													<input type="date" id="curdate" class="form-control" name="date">
													<div class="form-control-position">
														<i class="icon-calendar5"></i>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>Nama Donatur</label>
												<select name="donatur" class="form-control">
													<option selected value="null">Pilih Donatur</option>
													<option value="1" data-value="jajan sunaryo">Jajan Sunaryo</option>
													<option value="2" data-value="siti ubaid">Siti Ubaid</option>
												</select>
											</div>
											<div class="form-group">
												<label>Nama Kegiatan</label>
												<select name="kegiatan" class="form-control">
													<option selected value="null">Pilih Kegiatan</option>
													<option value="1" data-value="tarik tambang">Tarik Tambang</option>
													<option value="2" data-value="lomba renang">Lomba Renang</option>
													<option value="3" data-value="balap sepeda">Balap Sepeda</option>
												</select>
											</div>
											<div class="form-group">
												<label>Nominal</label>
												<div class="position-relative has-icon-left">
													<input type="text" id="inpnominal" class="form-control" name="nominal">
													<div class="form-control-position">
														<i class="icon-banknote"></i>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button class="btn btn-primary float-xs-right btn-tambah">Tambah</button>
							</div>
						</div>
					</div>

					<!-- kuitansi -->
					<div class="col-xs-12">
						<?= $this->load->view('kuitansi') ?>
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
	<script src="<?= base_url('app-assets/vendors/js/miscellaneous/html2canvas.min.js') ?>"></script>
	<script src="<?= base_url('app-assets/js/terbilang.js') ?>"></script>
	<script src="<?= base_url('app-assets/js/dateindo.js') ?>"></script>
	<script>

		$(".btn-tambah").click(function() {
			// window.open("<?= site_url('keuangan/donasi/kuitansi') ?>", "_blank");
			var kuitansi = document.getElementById('kuitansi_print');
			html2canvas(kuitansi, {scale: 8}).then(function(canvas){
				var base64f = canvas.toDataURL("image/png");
				// after this base64f can be stored via ajax
				window.open(base64f, "_blank"); // this just for demo only
			});
		});

		$("#inpnominal").terbilang({
			lang: 'id',
			output: $("#terbilang"),
			outmode: 2
		});

		$("#inpnominal").keyup(function(){
			$("#nominal").html(addCommas($(this).val()));
		});

		$("select").change(function() {
			// #penerima, #terbilang, #kegiatan, #nominal, #tanggal
			var name = $(this).attr('name'),
				value = $(this).find(':selected').data('value');
			switch (name) {
				case 'donatur':
					$("#penerima").html(value);
					break;
				case 'kegiatan':
					$("#kegiatan").html(value);
					break;
			}
		});

		$("#curdate").change(function(){
			$("#tanggal").html(dateindo($(this).val()));
		});

		function addCommas(t){x=(t+="").split("."),x1=x[0],x2=1<x.length?"."+x[1]:"";for(var e=/(\d+)(\d{3})/;e.test(x1);)x1=x1.replace(e,"$1,$2");return x1+x2}
	</script>
</body>

</html>