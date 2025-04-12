<?php
    $id = $_GET['id'];
     // Cek apakah kategori digunakan oleh buku
     $cek_buku = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_kategori = $id");
     $ada_buku = mysqli_num_rows($cek_buku);
 
     // Cek apakah ada peminjaman dari buku-buku kategori tersebut
     $cek_peminjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman p 
         JOIN buku b ON p.id_buku = b.id_buku 
         WHERE b.id_kategori = $id");
     $ada_peminjaman = mysqli_num_rows($cek_peminjaman);
     if ($ada_buku > 0 || $ada_peminjaman > 0) {
        $pesan = "Kategori ini sedang digunakan:\n";
        if ($ada_buku > 0) $pesan .= "- Ada buku yang memakai kategori ini.\n";
        if ($ada_peminjaman > 0) $pesan .= "- Ada peminjam yang meminjam buku dari kategori ini.\n";
        $pesan .= "Yakin ingin tetap menghapus?";
        echo "<script>
            if (confirm(`$pesan`)) {
                window.location.href = 'hapus_kategori.php?hapus=1&id=$id';
            } else {
                window.location.href = 'dashboard.php?page=kategori';
            }
        </script>";
    } else {
        // Langsung hapus jika aman
        mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");
        echo "<script>
            alert('Hapus data berhasil');
            window.location.href = 'dashboard.php?page=kategori';
        </script>";
    }
?>
