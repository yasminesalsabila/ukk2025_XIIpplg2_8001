<h1 class="mt-4">Kategori Tugas</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=categories_tambah" class="btn btn-outline-primary"><i class="fa fa-plus"></i>  Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM categories");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['categories']; ?></td>
                                <td>
                                    <a href="?page=categories_ubah&&id=<?php echo $data['category']; ?>" class="btn btn-outline-info">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin menhapus data ini?');" href="?page=categories_hapus&&id=<?php echo $data['category']; ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i>Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>