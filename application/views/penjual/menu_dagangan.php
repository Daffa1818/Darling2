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