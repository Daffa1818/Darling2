<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="<?php echo site_url('penjual/data_dagangan'); ?>"
       class="brand-link">

        <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png'); ?>"
             class="brand-image img-circle elevation-3"
             style="opacity:.8">

        <span class="brand-text font-weight-light">
            Radar Pedagang
        </span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>"
                     class="img-circle elevation-2">
            </div>

            <div class="info">
                <a href="#" class="d-block">Penjual</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Data Dagangan</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>


<!-- CONTENT -->
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Data Dagangan</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card card-info">

                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-store mr-1"></i>
                                Lengkapi Data Dagangan
                            </h3>
                        </div>

                        <form method="POST"
                              action="<?php echo site_url('penjual/data_dagangan'); ?>">

                            <div class="card-body">

                                <div class="alert alert-info">
                                    Silakan isi informasi dagangan Anda
                                    terlebih dahulu sebelum masuk ke dashboard.
                                </div>

                                <div class="form-group">
                                    <label>Nama Usaha / Nama Dagangan</label>

                                    <input type="text"
                                           name="nama_usaha"
                                           class="form-control"
                                           placeholder="Contoh: Warung Berkah"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Dagangan</label>

                                    <select name="jenis_dagangan"
                                            class="form-control"
                                            required>

                                        <option value="">-- Pilih Jenis Dagangan --</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                        <option value="Jajanan">Jajanan</option>
                                        <option value="Sayuran dan Buah">Sayuran dan Buah</option>
                                        <option value="Sembako">Sembako</option>
                                        <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
                                        <option value="Lainnya">Lainnya</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi Dagangan</label>

                                    <textarea name="deskripsi"
                                              class="form-control"
                                              rows="4"
                                              placeholder="Ceritakan dagangan yang Anda jual..."
                                              required></textarea>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">
                                    <i class="fas fa-arrow-right mr-1"></i>
                                    Simpan dan Masuk Dashboard
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </section>

</div>

views/ data_dagangan