<?php
        $id_peminjaman = $_GET['id_peminjaman'];
        $tanggal_sekarang = date("Y-m-d"); // Format tanggal saat ini

     
        $query = mysqli_query($koneksi, "SELECT id_buku FROM peminjaman WHERE id_peminjaman='$id_peminjaman'");
        $data = mysqli_fetch_array($query);
        $id_buku = $data['id_buku'];
    
        $pengembalian = mysqli_query($koneksi, "UPDATE peminjaman SET status_peminjaman='dikembalikan', tanggal_pengembalian='$tanggal_sekarang' WHERE id_peminjaman='$id_peminjaman'");
        // Jika pengembalian berhasil, update jumlah buku di tabel buku
        if ($pengembalian) {
        
            $update_buku = mysqli_query($koneksi, "UPDATE buku SET jumlah = jumlah + 1 WHERE id_buku = '$id_buku'");
            if ($update_buku) {
                echo '<script>
                    alert("Pengembalian berhasil");
                    window.location.href = "?page=laporan";
                </script>';
            } else {
                echo '<script>
                    alert("Pengembalian berhasil, tetapi gagal menambah jumlah buku");
                    window.location.href = "?page=laporan";
                </script>';
            }
        } else {
            echo '<script>
                alert("Pengembalian gagal");
                window.location.href = "?page=laporan";
            </script>';
        }
?>