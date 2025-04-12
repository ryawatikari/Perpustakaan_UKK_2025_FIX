<!-- file ini tidak dipakai -->
<?php
$id = $_GET['id_peminjaman'];

$query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman = '$id'");
$data = mysqli_fetch_array($query);

$id_buku = $data['id_buku'];
$id_user = $data['id_user'];
$tanggal_peminjaman = $data['tanggal_peminjaman'];
$tanggal_jatuh_tempo = date('Y-m-d', strtotime($tanggal_peminjaman . ' + 5 days'));
$tanggal_sekarang = date('Y-m-d');

// Simpan ke pengembalian
mysqli_query($koneksi, "INSERT INTO pengembalian (id_buku, id_user, tanggal_peminjaman, tanggal_jatuh_tempo, tanggal_pengembalian, status_peminjaman)
    VALUES ('$id_buku', '$id_user', '$tanggal_peminjaman', '$tanggal_jatuh_tempo', '$tanggal_sekarang', 'dikembalikan')");

// Hapus dari peminjaman
mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman = '$id'");

echo "<script>alert('Buku berhasil dikembalikan'); window.location='?page=laporan';</script>";
?>
