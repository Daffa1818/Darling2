<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href=""
        class="brand-link">

        <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png'); ?>"
            class="brand-image img-circle elevation-3"
            style="opacity:.8">

        <span class="brand-text font-weight-light">
            Radar Pedagang
        </span>
    </a>

    <div class="sidebar">

        <!-- USER PANEL -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>"
                    class="img-circle elevation-2">
            </div>

            <div class="info">
                <a href="#" class="d-block">
                    Penjual
                </a>
            </div>

        </div>

        <!-- MENU SIDEBAR -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="<?php echo site_url('penjual/index'); ?>"
                        class="nav-link">

                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo site_url('penjual/menu_dagangan'); ?>" class="nav-link active">

                        <i class="nav-icon fas fa-utensils"></i>
                        <p>Menu Dagangan</p>

                    </a>
                </li>

            </ul>

        </nav>

    </div>
</aside>


<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>Menu Dagangan</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">


            <div class="card card-info" id="menu-saya">

                <div class="card-header">

                    <h3 class="card-title">
                        <i class="fas fa-utensils mr-1"></i>
                        Menu Dagangan Saya
                    </h3>

                    <div class="card-tools">

                        <button type="button"
                            class="btn btn-sm btn-light"
                            data-toggle="modal"
                            data-target="#modalTambahMenu">

                            <i class="fas fa-plus mr-1"></i>
                            Tambah Menu

                        </button>

                    </div>

                </div>


                <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th width="60">No</th>
                                        <th>Nama Menu</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th width="120">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>


                                        <tr>

                                            <td>1</td>

                                            <td>
                                                <strong>
                                                    Bakso
                                                </strong>
                                            </td>

                                            <td>
                                                Makanan berat
                                            </td>

                                            <td>
                                                bakso enak
                                            </td>

                                            <td>

                                                <button type="button"
                                                    class="btn btn-info btn-sm"
                                                    data-toggle="modal"
                                                    data-target="#detailMenu">

                                                    <i class="fas fa-eye"></i>

                                                </button>

                                                <a href="<?php echo site_url('penjual/hapus_menu/'); ?>"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus menu ini?')">

                                                    <i class="fas fa-trash"></i>

                                                </a>

                                            </td>

                                        </tr>


                                        <!-- MODAL DETAIL -->
                                        <div class="modal fade"
                                            id="detailMenu">

                                            <div class="modal-dialog">

                                                <div class="modal-content">

                                                    <div class="modal-header bg-info">

                                                        <h5 class="modal-title">
                                                            Detail Menu
                                                        </h5>

                                                        <button type="button"
                                                            class="close"
                                                            data-dismiss="modal">

                                                            <span>&times;</span>

                                                        </button>

                                                    </div>

                                                    <div class="modal-body">

                                                        <h5>
                                                            
                                                        </h5>

                                                        <p>
                                                            Kategori:
                                                                                                                    </p>

                                                        <hr>

                                                        <p>
                                                            
                                                        </p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                </tbody>

                            </table>

                        </div>


                        <div class="text-center text-muted p-4">

                            <i class="fas fa-box-open fa-3x mb-3"></i>

                            <h5>Belum Ada Menu Dagangan</h5>

                            <p>
                                Silakan tambahkan menu dagangan Anda.
                            </p>

                        </div>


                </div>

            </div>