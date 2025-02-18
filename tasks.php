<h1 class="mt-4">Tugas</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=tasks_tambah" class="btn btn-outline-primary"><i class="fa fa-plus"></i>  Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Nama Tugas</th>
                        <th>prioritas</th>
                        <th>Tanggal Riwayat</th>
                        <th>Status Tugas</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM tasks LEFT JOIN categories on tasks.category_id = categories.category_id");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['categories']; ?></td>
                                <td><?php echo $data['tasks']; ?></td>
                                <td><?php echo $data['priority']; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <td><?php echo $data['due_date']; ?></td>
                                <td>
                                    <a href="?page=tasks_ubah&&id=<?php echo $data['tasks']; ?>" class="btn btn-outline-info">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin menhapus data ini?');" href="?page=tasks_hapus&&id=<?php echo $data['tasks']; ?>" class="btn btn-outline-danger">Hapus</a>
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