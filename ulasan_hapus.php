<?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM ulasan  WHERE id_ulasan=$id");
?>
<script>
    alert("Hapus data Berhasil");
    location.href = "dashboard.php?page=ulasan";
</script>