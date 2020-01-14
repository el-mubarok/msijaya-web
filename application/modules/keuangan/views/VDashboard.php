<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<!-- head -->
<?= $this->load->view('../../elements/head'); ?>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

	<!-- navbar-fixed-top-->
	<?= $this->load->view('../../elements/navbar'); ?>

	<!-- ////////////////////////////////////////////////////////////////////////////-->

	<!-- main menu / sidebar-->
	<?= $this->load->view('../../elements/sidebar'); ?>
	<!-- / main menu / sidebar-->

	<div class="app-content content container-fluid" style="min-height: 100%;">
		<div class="content-wrapper">

			<div class="content-body">

				<div class="row">
					<div class="col-xl-3 col-lg-6 col-xs-12">
						<div class="card">
							<div class="card-body">
								<div class="card-block">
									<div class="media">
										<div class="media-body text-xs-left">
											<h3 class="pink">278</h3>
											<span>Total Warga</span>
										</div>
										<div class="media-right media-middle">
											<i class="icon-users pink font-large-2 float-xs-right"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-xs-12">
						<div class="card">
							<div class="card-body">
								<div class="card-block">
									<div class="media">
										<div class="media-body text-xs-left">
											<h3 class="teal">Rp150K</h3>
											<span>Pemasukan Bulan Ini</span>
										</div>
										<div class="media-right media-middle">
											<i class="icon-arrow78 teal font-large-2 float-xs-right"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-xs-12">
						<div class="card">
							<div class="card-body">
								<div class="card-block">
									<div class="media">
										<div class="media-body text-xs-left">
											<h3 class="deep-orange">Rp0</h3>
											<span>Pengeluaran Bulan Ini</span>
										</div>
										<div class="media-right media-middle">
											<i class="icon-arrow79 deep-orange font-large-2 float-xs-right"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-xs-12">
						<div class="card">
							<div class="card-body">
								<div class="card-block">
									<div class="media">
										<div class="media-body text-xs-left">
											<h3 class="cyan">Rp2.500K</h3>
											<span>Total Saldo</span>
										</div>
										<div class="media-right media-middle">
											<i class="icon-gold2 cyan font-large-2 float-xs-right"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->

	<!-- footer -->
	<?= $this->load->view('../../elements/footer'); ?>

	<!-- script -->
	<?= $this->load->view('../../elements/script'); ?>
</body>

</html>