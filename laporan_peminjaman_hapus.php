<?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM peminjaman  WHERE id_peminjaman=$id");
?>
<script>
    alert("Hapus data Berhasil");
    location.href = "dashboard.php?page=laporan";
</script>