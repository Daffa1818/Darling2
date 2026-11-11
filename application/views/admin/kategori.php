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
						<!-- Kolom Kiri: Form Tambah Kategori -->
						<div class="col-md-4">
							<div class="card card-warning card-outline">
								<div class="card-header">
									<h3 class="card-title">Tambah Kategori Baru</h3>
								</div>
								<form onsubmit="event.preventDefault(); alert('Simulasi: Kategori jajanan baru berhasil ditambahkan!');">
									<div class="card-body">
										<div class="form-group">
											<label>Nama Kategori</label>
											<input type="text" class="form-control" placeholder="Contoh: Makanan Berat, Minuman" required>
										</div>
										<div class="form-group">
											<label>Deskripsi Singkat</label>
											<textarea class="form-control" rows="2" placeholder="Contoh: Bakso, Mie Ayam, Soto, Nasi Goreng"></textarea>
										</div>
										<div class="form-group">
											<label>Warna Pin / Marker di Peta</label>
											<select class="form-control">
												<option value="merah">Merah (Makanan Berat)</option>
												<option value="biru">Biru (Minuman Segar)</option>
												<option value="kuning">Kuning (Jajanan Ringan / Gorengan)</option>
												<option value="hijau">Hijau (Kue Tradisional / Roti)</option>
											</select>
										</div>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-warning btn-block">
											<i class="fas fa-plus mr-1"></i> Simpan Kategori
										</button>
									</div>
								</form>
							</div>
						</div>

						<!-- Kolom Kanan: Tabel Daftar Kategori -->
						<div class="col-md-8">
							<div class="card card-warning card-outline">
								<div class="card-header">
									<h3 class="card-title">Daftar Kategori Jajanan</h3>
								</div>
								<div class="card-body table-responsive p-0">
									<table class="table table-hover text-nowrap">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Kategori</th>
												<th>Contoh Jajanan</th>
												<th>Warna Pin Peta</th>
												<th>Jumlah Mitra</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td><b>Makanan Berat</b></td>
												<td>Bakso, Mie Ayam, Bubur Ayam, Soto</td>
												<td><span class="badge badge-danger"><i class="fas fa-map-pin mr-1"></i> Pin Merah</span></td>
												<td>18 Pedagang</td>
												<td>
													<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-edit-kategori">
														<i class="fas fa-edit"></i> Edit
													</button>
													<button type="button" class="btn btn-danger btn-xs" onclick="alert('Simulasi: Kategori dihapus!')">
														<i class="fas fa-trash"></i> Hapus
													</button>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td><b>Minuman Segar</b></td>
												<td>Es Doger, Es Cendol, Es Teh, Kopi Keliling</td>
												<td><span class="badge badge-primary"><i class="fas fa-map-pin mr-1"></i> Pin Biru</span></td>
												<td>12 Pedagang</td>
												<td>
													<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-edit-kategori">
														<i class="fas fa-edit"></i> Edit
													</button>
													<button type="button" class="btn btn-danger btn-xs" onclick="alert('Simulasi: Kategori dihapus!')">
														<i class="fas fa-trash"></i> Hapus
													</button>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td><b>Jajanan Ringan</b></td>
												<td>Siomay, Batagor, Cilok, Cimol, Tahu Bulat</td>
												<td><span class="badge badge-warning"><i class="fas fa-map-pin mr-1"></i> Pin Kuning</span></td>
												<td>9 Pedagang</td>
												<td>
													<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-edit-kategori">
														<i class="fas fa-edit"></i> Edit
													</button>
													<button type="button" class="btn btn-danger btn-xs" onclick="alert('Simulasi: Kategori dihapus!')">
														<i class="fas fa-trash"></i> Hapus
													</button>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td><b>Kue & Roti</b></td>
												<td>Sari Roti, Kue Putu, Kue Ape, Martabak Mini</td>
												<td><span class="badge badge-success"><i class="fas fa-map-pin mr-1"></i> Pin Hijau</span></td>
												<td>5 Pedagang</td>
												<td>
													<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-edit-kategori">
														<i class="fas fa-edit"></i> Edit
													</button>
													<button type="button" class="btn btn-danger btn-xs" onclick="alert('Simulasi: Kategori dihapus!')">
														<i class="fas fa-trash"></i> Hapus
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- ========================================================================= -->
		<!-- MODAL POP-UP EDIT KATEGORI                                                -->
		<!-- ========================================================================= -->
		<!-- ========================================================================= -->
		<!-- MODAL POP-UP EDIT KATEGORI                                                -->
		<!-- ========================================================================= -->
		<div class="modal fade" id="modal-edit-kategori">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-warning">
						<h4 class="modal-title">Edit Kategori Jajanan</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Nama Kategori</label>
							<input type="text" class="form-control" value="Makanan Berat">
						</div>
						<div class="form-group">
							<label>Contoh Jajanan</label>
							<textarea class="form-control" rows="2">Bakso, Mie Ayam, Bubur Ayam, Soto</textarea>
						</div>
						<div class="form-group">
							<label>Warna Pin / Marker di Peta</label>
							<select class="form-control">
								<option selected>Merah (Makanan Berat)</option>
								<option>Biru (Minuman Segar)</option>
								<option>Kuning (Jajanan Ringan)</option>
								<option>Hijau (Kue Tradisional)</option>
							</select>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal" onclick="alert('Simulasi: Perubahan kategori berhasil disimpan!')">Simpan Perubahan</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->