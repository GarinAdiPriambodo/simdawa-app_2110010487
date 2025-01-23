<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-plus"></i> Tambah Data Program Studi
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama Program Studi</label>
                                <input type="text" name="nama_prodi" class="form-control" required>
                            </div>
                            <button type="submit" name="create" class="btn btn-info">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="<?= base_url('prodi') ?>" class="btn btn-danger">
                                <i class="fas fa-times"></i> Batal
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>