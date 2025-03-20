<?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM user  WHERE id_user=$id");
?>
<script>
    alert("Hapus data Berhasil");
    location.href = "dashboard.php?page=user";
</script>