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
							<a href="<?php echo site_url('admin'); ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<li class="nav-header">MANAJEMEN DATA</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/pedagang'); ?>" class="nav-link active">
								<i class="nav-icon fas fa-store"></i>
								<p>
									Data Pedagang
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/pembeli'); ?>" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>Data Pembeli</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/kategori'); ?>" class="nav-link">
								<i class="nav-icon fas fa-utensils"></i>
								<p>Kategori Jajanan</p>
							</a>
						</li>

						<li class="nav-header">LAINNYA</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/laporan'); ?>" class="nav-link">
								<i class="nav-icon fas fa-exclamation-triangle"></i>
								<p>Laporan & Keluhan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('admin/pengaturan'); ?>" class="nav-link">
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
								<li class="breadcrumb-item"><a href="#">Home</a></li>
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
					<!-- Baris 1: 4 Kotak Statistik -->
					<div class="row">
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-warning">
								<div class="inner">
									<h3>44</h3>
									<p>Total Pedagang</p>
								</div>
								<div class="icon">
									<i class="fas fa-store"></i>
								</div>
								<a href="#" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<h3>18</h3>
									<p>Pedagang Berkeliling (Online)</p>
								</div>
								<div class="icon">
									<i class="fas fa-map-marked-alt"></i>
								</div>
								<a href="#" class="small-box-footer">Lihat di peta <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info">
								<div class="inner">
									<h3>152</h3>
									<p>Total Pembeli</p>
								</div>
								<div class="icon">
									<i class="fas fa-users"></i>
								</div>
								<a href="#" class="small-box-footer">Lihat detail <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3>5</h3>
									<p>Menunggu Verifikasi</p>
								</div>
								<div class="icon">
									<i class="fas fa-user-clock"></i>
								</div>
								<a href="#" class="small-box-footer">Verifikasi sekarang <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /.row -->

					<!-- Baris 2: Peta Pantauan -->
					<div class="card bg-gradient-primary">
						<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
							<h3 class="card-title">
								<i class="fas fa-map-marker-alt mr-1"></i>
								Sebaran Pedagang Keliling Aktif
							</h3>
							<!-- card tools -->
							<div class="card-tools">
								<button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
							<!-- /.card-tools -->
						</div>
						<div class="card-body p-0">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6567528007386!2d106.82577201125315!3d-6.43811039352605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb1403c4f39f%3A0xc4fae7de4f7e2f4!2sKurma%20Media!5e0!3m2!1sid!2sid!4v1794365537091!5m2!1sid!2sid"
								class="w-100"
								height="400"
								style="border:0; display:block;"
								allowfullscreen=""
								loading="lazy">
							</iframe>
						</div>
						<!-- /.card-body-->
					</div>

					<!-- Baris 3: Dua Tabel Pantauan Cepat -->
					<div class="row">
						<!-- Kolom Kiri: Pedagang Baru Mendaftar -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Pendaftaran Pedagang Terbaru</h3>
								</div>
								<div class="card-body table-responsive p-0">
									<table class="table table-striped table-valign-middle">
										<thead>
											<tr>
												<th>Nama Pedagang</th>
												<th>Jajanan</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Siti Aminah</td>
												<td>Es Doger Bu Siti</td>
												<td><span class="badge badge-warning">Pending</span></td>
											</tr>
											<tr>
												<td>Ahmad Dani</td>
												<td>Cilok Kuah Pedas</td>
												<td><span class="badge badge-warning">Pending</span></td>
											</tr>
											<tr>
												<td>Budi Santoso</td>
												<td>Bakso Malang</td>
												<td><span class="badge badge-success">Terverifikasi</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!-- Kolom Kanan: Status GPS Terkini -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Aktivitas GPS Pedagang Terkini</h3>
								</div>
								<div class="card-body table-responsive p-0">
									<table class="table table-striped table-valign-middle">
										<thead>
											<tr>
												<th>Nama Pedagang</th>
												<th>Area Terakhir</th>
												<th>GPS</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Budi Santoso</td>
												<td>Jl. Kalimulya, Cilodong</td>
												<td><span class="badge badge-success">Online</span></td>
											</tr>
											<tr>
												<td>Kang Ujang</td>
												<td>Boulevard Grand Depok City</td>
												<td><span class="badge badge-success">Online</span></td>
											</tr>
											<tr>
												<td>Pak Slamet</td>
												<td>Area Situ Cilodong</td>
												<td><span class="badge badge-secondary">Offline</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->
