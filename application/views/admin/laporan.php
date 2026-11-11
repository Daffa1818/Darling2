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
					<div class="row">
						<div class="col-12">
							<div class="card card-danger card-outline">
								<div class="card-header">
									<h3 class="card-title">Daftar Laporan & Keluhan Pengguna</h3>
									<div class="card-tools">
										<div class="input-group input-group-sm" style="width: 220px;">
											<input type="text" name="table_search" class="form-control float-right" placeholder="Cari tiket laporan...">
											<div class="input-group-append">
												<button type="submit" class="btn btn-default">
													<i class="fas fa-search"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /.card-header -->

								<div class="card-body table-responsive p-0">
									<table class="table table-hover text-nowrap">
										<thead>
											<tr>
												<th>ID Tiket</th>
												<th>Tanggal</th>
												<th>Pelapor</th>
												<th>Kategori Masalah</th>
												<th>Subjek Keluhan</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<!-- Laporan 1: Belum Ditangani -->
											<tr>
												<td><b>#LP-001</b></td>
												<td>11 Nov 2026</td>
												<td>Rina Melati (Pembeli)</td>
												<td><span class="badge badge-info">Akurasi GPS</span></td>
												<td>Titik lokasi pedagang bakso tidak bergerak di peta</td>
												<td><span class="badge badge-danger">Belum Ditangani</span></td>
												<td>
													<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-tindak-lanjut">
														<i class="fas fa-reply"></i> Tindak Lanjuti
													</button>
												</td>
											</tr>

											<!-- Laporan 2: Sedang Diproses -->
											<tr>
												<td><b>#LP-002</b></td>
												<td>10 Nov 2026</td>
												<td>Budi Santoso (Pedagang)</td>
												<td><span class="badge badge-secondary">Bug Sistem</span></td>
												<td>Tombol "Mulai Berkeliling" sering berhenti sendiri saat layar mati</td>
												<td><span class="badge badge-warning">Diproses</span></td>
												<td>
													<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-tindak-lanjut">
														<i class="fas fa-reply"></i> Tindak Lanjuti
													</button>
												</td>
											</tr>

											<!-- Laporan 3: Selesai -->
											<tr>
												<td><b>#LP-003</b></td>
												<td>08 Nov 2026</td>
												<td>Dimas Pratama (Pembeli)</td>
												<td><span class="badge badge-dark">Akun Fiktif</span></td>
												<td>Pedagang atas nama "Cilok Mantap" tidak ada di lokasi sesuai pin</td>
												<td><span class="badge badge-success">Selesai</span></td>
												<td>
													<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-tindak-lanjut">
														<i class="fas fa-eye"></i> Lihat Riwayat
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- /.card-body -->

								<div class="card-footer clearfix">
									<div class="float-left text-muted text-sm">
										Menampilkan 3 laporan masuk
									</div>
									<ul class="pagination pagination-sm m-0 float-right">
										<li class="page-item"><a class="page-link" href="#">«</a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">»</a></li>
									</ul>
								</div>
							</div>
							<!-- /.card -->
						</div>
					</div>
				</div>
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- ========================================================================= -->
		<!-- MODAL POP-UP TINDAK LANJUT LAPORAN                                        -->
		<!-- ========================================================================= -->
		<div class="modal fade" id="modal-tindak-lanjut">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<h4 class="modal-title">Detail & Tindak Lanjut Laporan (#LP-001)</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="callout callout-danger">
							<h5>Isi Keluhan dari Rina Melati:</h5>
							<p>"Saya sudah menunggu di depan gang berdasarkan posisi pin Bakso Malang Mas Budi di peta, tapi ternyata pedagang sudah lewat 15 menit lalu. Posisi di peta terlambat update."</p>
						</div>
						<div class="form-group">
							<label>Ubah Status Tiket</label>
							<select class="form-control">
								<option>Belum Ditangani</option>
								<option selected>Diproses</option>
								<option>Selesai</option>
							</select>
						</div>
						<div class="form-group">
							<label>Catatan / Balasan Admin ke Pelapor</label>
							<textarea class="form-control" rows="3" placeholder="Tuliskan penjelasan atau solusi untuk pelapor...">Terima kasih atas laporannya. Kami telah memperbarui interval sinkronisasi GPS pedagang dan mengingatkan mitra untuk menjaga koneksi internet tetap stabil.</textarea>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="alert('Simulasi: Status laporan diperbarui dan balasan terkirim ke pelapor!')">Simpan & Kirim Balasan</button>
					</div>
				</div>
			</div>
		</div>

		<aside class="control-sidebar control-sidebar-dark">
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->
