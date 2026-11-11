		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?php echo base_url(); ?>" class="brand-link">
				<img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light" style="font-size: 16px;">Radar Pedagang Keliling</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Administrator</a>
					</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Cari menu..." aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="<?php echo site_url('admin'); ?>" class="nav-link <?php echo ($title == 'Dashboard') ? 'active' : ''; ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<li class="nav-header">MANAJEMEN DATA</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/pedagang'); ?>" class="nav-link <?php echo ($title == 'Data Pedagang') ? 'active' : ''; ?>">
								<i class="nav-icon fas fa-store"></i>
								<p>
									Data Pedagang
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/pembeli'); ?>" class="nav-link <?php echo ($title == 'Data Pembeli') ? 'active' : ''; ?>">
								<i class="nav-icon fas fa-users"></i>
								<p>Data Pembeli</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/kategori'); ?>" class="nav-link <?php echo ($title == 'Kategori Jajanan') ? 'active' : ''; ?>">
								<i class="nav-icon fas fa-utensils"></i>
								<p>Kategori Jajanan</p>
							</a>
						</li>

						<li class="nav-header">LAINNYA</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/laporan'); ?>" class="nav-link <?php echo ($title == 'Laporan & Keluhan') ? 'active' : ''; ?>">
								<i class="nav-icon fas fa-exclamation-triangle"></i>
								<p>Laporan & Keluhan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/pengaturan'); ?>" class="nav-link <?php echo ($title == 'Pengaturan Sistem') ? 'active' : ''; ?>">
								<i class="nav-icon fas fa-cog"></i>
								<p>Pengaturan Sistem</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0"><?php echo $title; ?></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>">Home</a></li>
								<li class="breadcrumb-item active"><?php echo $title; ?></li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					<form onsubmit="event.preventDefault(); alert('Simulasi: Pengaturan sistem berhasil disimpan!');">
						<div class="row">
							<!-- Kolom Kiri: Pengaturan Umum & Identitas -->
							<div class="col-md-6">
								<div class="card card-secondary card-outline">
									<div class="card-header">
										<h3 class="card-title"><i class="fas fa-globe mr-1"></i> Identitas Aplikasi</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Nama Platform</label>
											<input type="text" class="form-control" value="Darling">
										</div>
										<div class="form-group">
											<label>Slogan Halaman Utama</label>
											<input type="text" class="form-control" value="Jajan jadi lebih mudah">
										</div>
										<div class="form-group">
											<label>Deskripsi Singkat</label>
											<textarea class="form-control" rows="3">Jajaneling menawarkan cara mudah untuk jajan dari pedagang keliling di sekitar Anda secara real-time.</textarea>
										</div>
										<div class="form-group">
											<label>Email & WhatsApp Layanan Bantuan</label>
											<input type="text" class="form-control" value="bantuan@jajaneling.id / 0812-0000-9999">
										</div>
									</div>
								</div>
							</div>

							<!-- Kolom Kanan: Pengaturan Geolocation & Operasional -->
							<div class="col-md-6">
								<div class="card card-primary card-outline">
									<div class="card-header">
										<h3 class="card-title"><i class="fas fa-map-marked-alt mr-1"></i> Konfigurasi Peta & GPS</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Radius Pencarian Pedagang Terdekat (KM)</label>
											<input type="number" class="form-control" value="2" min="1" max="20">
											<small class="text-muted">Batas jarak maksimal pedagang yang muncul di peta pembeli.</small>
										</div>
										<div class="form-group">
											<label>Interval Pembaruan Lokasi GPS (Detik)</label>
											<select class="form-control">
												<option value="5">Setiap 5 Detik (Sangat Akurat)</option>
												<option value="10" selected>Setiap 10 Detik (Direkomendasikan)</option>
												<option value="30">Setiap 30 Detik (Hemat Baterai & Kuota)</option>
											</select>
										</div>
										<div class="form-group">
											<label>Batas Waktu Otomatis Offline (Menit)</label>
											<input type="number" class="form-control" value="15">
											<small class="text-muted">Pedagang otomatis dianggap offline jika sinyal GPS terputus selama durasi ini.</small>
										</div>
										<hr>
										<div class="form-group mb-0">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="switch-verifikasi" checked>
												<label class="custom-control-label" for="switch-verifikasi">Wajibkan Verifikasi Admin untuk Pedagang Baru</label>
											</div>
										</div>
										<div class="form-group mt-2 mb-0">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="switch-maintenance">
												<label class="custom-control-label text-danger" for="switch-maintenance">Aktifkan Mode Pemeliharaan (Maintenance Mode)</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Tombol Simpan di Bagian Bawah -->
						<div class="row mb-4">
							<div class="col-12">
								<button type="submit" class="btn btn-primary float-left">
									<i class="fas fa-save mr-1"></i> Simpan Semua Pengaturan
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<aside class="control-sidebar control-sidebar-dark">
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->
