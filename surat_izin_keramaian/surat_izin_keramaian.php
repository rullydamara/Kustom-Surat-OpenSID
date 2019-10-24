<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Pengantar Izin Keramaian</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Pengantar Izin Keramaian</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url("surat")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
           	</a>
					</div>
					<div class="box-body">
						<form action="" id="main" name="main" method="POST" class="form-horizontal">
						<?php include("donjo-app/views/surat/form/_cari_nik.php"); ?>
						</form>
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							<div class="row jar_form">
								<label for="nomor" class="col-sm-3"></label>
								<div class="col-sm-8">
									<input class="required" type="hidden" name="nik" value="<?= $individu['id']?>">
								</div>
							</div>
							<?php if ($individu): ?>
								<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
							<?php	endif; ?>
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
							<div class="form-group">
								<label for="jenis_keramaian"  class="col-sm-3 control-label">Jenis Hiburan</label>
								<div class="col-sm-8">
									<input  id="jenis_keramaian" class="form-control input-sm required" type="text" placeholder="Jenis Hiburan (Qosidah Modern, Kuda Lumping, Orgen Tunggal, Orkes, dll)" name="jenis_keramaian">
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Dalam Rangka</label>
								<div class="col-sm-8">
									<input  id="keperluan" class="form-control input-sm required" type="text" placeholder="Dalam Rangka (Pernikahan/Khitanan/dll)" name="keperluan">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Hari, Tanggal, Jam Hiburan</label>
									<div class="col-sm-3 col-lg-4">
										<input class="form-control input-sm required hari" type="text" name="hari_hiburan" id="hari_hiburan" readonly="readonly" placeholder="Hari Hiburan" value="<?= $_SESSION['post']['hari_hiburan']?>">
									</div>
									<div class="col-sm-3 col-lg-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari required" name="tanggal_hiburan" type="text" placeholder="Tgl. Hiburan" value="<?= $_SESSION['post']['tanggal_hiburan']?>"/>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input class="form-control input-sm required" name="jam_hiburan" id="jammenit_1" type="text" placeholder="Jam Hiburan" value="<?= $_SESSION['post']['jam_hiburan']?>"/>
										</div>
									</div>
							</div>
							<div class="form-group">
								<label for="no_rt"  class="col-sm-3 control-label">RT/Nama RT</label>
								<div class="col-sm-3 col-lg-2">
									<input  id="no_rt" class="form-control input-sm required" type="text" placeholder="RT" name="no_rt">
								</div>
								<div class="col-sm-3 col-lg-2">
									<input  id="nama_rt" class="form-control input-sm required" type="text" placeholder="Nama RT" name="nama_rt">
								</div>
							</div>
							<div class="form-group">
								<label for="nama_rk"  class="col-sm-3 control-label">RK/Nama RK</label>
								<div class="col-sm-3 col-lg-2">
									<input  id="rk" class="form-control input-sm required" type="text" placeholder="RK" name="rk">
								</div>
								<div class="col-sm-3 col-lg-2">
									<input  id="nama_rk" class="form-control input-sm required" type="text" placeholder="Nama RK" name="nama_rk">
								</div>
							</div>
							<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			</div>
		</div>
	</section>
</div>
