<div class="container-fluid">
    <div class="row">
        <?php
        require 'admin/template/menu.php';
        ?>

        <main class="cold-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Jabatan</h1>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        <i class="fa fa-plus"></i> Tambah Jabatan
                    </button>
                </div>
            </div>
            <?php
            if (isset($_SESSION['_flashdata'])) {
                echo '<div>';
                foreach ($_SESSION['_flashdata'] as $key => $val) {
                    echo get_flashdata($key);
                }
                echo '</div>';
            }
            ?>

            <div class="table-responsive small">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = "SELECT * FROM jabatan ORDER BY id DESC";
                        $result = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $row['jabatan']; ?></td>
                                <td><?= $row['keterangan']; ?></td>
                                <td>
                                    <a href="index.php?page=jabatan/edit&id=<?= $row['id']; ?>" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </a>
                                    <a href="fungsi/hapus.php?jabatan=hapus&id=<?= $row['id']; ?>" onclick="javascript:return confirm('Hapus Data Jabatan ?');" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Jabatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="fungsi/tambah.php?jabatan=tambah" method="POST">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Jabatan:</label>
                                        <input type="text" name="jabatan" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan" class="col-form-label">Keterangan:</label>
                                        <textarea name="keterangan" class="form-control" id="keterangan"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="fa fa-times" aria-hidden="true"></i>Close
                                        </button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</div>
