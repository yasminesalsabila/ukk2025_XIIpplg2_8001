<h1 class="mt-4">Kategori Tugas</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                <?php
                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            $categories = mysqli_real_escape_string($koneksi, $_POST['categories']);
                            $user_id = $_SESSION['users']['id']; 

                            $query = mysqli_query($koneksi, "UPDATE categories set categories='$categories' WHERE id=$id");

                            if($query) {
                                echo '<script>alert("Ubah data berhasil.");</script>';
                                echo '<script>window.location.href = "?page=categories";</script>';
                            } else {
                                echo '<script>alert("Ubah data gagal: ' . mysqli_error($koneksi) . '");</script>';
                            }
                        }
                        $query = mysqli_query($koneksi, "SELECT*FROM categories WHERE id=$id");
                        $data = mysqli_fetch_array($query);
                    ?>  
                    <div class="row mb-3">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="categories" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-outline-primary" name="submit" value="submit">Simpan</button>
                            <a href="?page=categories" class="btn btn-outline-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>