<?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM kategori  WHERE id_kategori=$id");
?>
<script>
    alert("Hapus data Berhasil");
    location.href = "dashboard.php?page=kategori";
</script>