<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM categories WHERE category_id=$id");
?>
<script>
    alert('Hapus Data Berhasil.');
    location.href = "index.php?page=categories";
</script>