<h1 class="mt-5">Ubah Data Pengembalian Buku</h1>
<div class="card text-bg-light">
    <div class="card-body">
        <div class="row">
            <form method="post">
                <?php
                    $id = $_GET['id'];
                    if(isset ($_POST['submit'])){
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                        $status_peminjaman = $_POST['status_peminjaman'];
                        $query = mysqli_query($koneksi, "UPDATE peminjaman set id_buku='$id_buku', id_user='$id_user', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian', status_peminjaman='$status_peminjaman' WHERE id_peminjaman=$id");

                        if ($query){
                            echo '<script>alert("Ubah data berhasil");
                                    location.href = "dashboard.php?page=peminjaman";
                            </script>';
                            
                        }else{
                            echo '<script>alert("Ubah data gagal"); </script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman WHERE id_peminjaman=$id");
                    $data = mysqli_fetch_array ($query);
                ?>
                <div class="row mb-3">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" class="form-control">
                                <?php
                                    $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                    while($buku = mysqli_fetch_array($buk)){
                                        ?>
                                        <option <?php if( $buku['id_buku'] == $data['id_buku'] ) echo 'selected'; ?> value="<?php echo $buku['id_buku']; ?>">
                                            <?php echo $buku['judul']; ?>
                                        </option>
                                        <?php 
                                    }
                                ?>  
                            </select>
                        </div>
                    </div>
                <div class="row mb-3">
                        <div class="col-md-2">Tanggal Peminjaman</div>
                        <div class="col-md-8">
                           <input type="date" class="form-control" value="<?=  $data['tanggal_peminjaman']; ?>" name="tanggal_peminjaman">
                        </div>
                </div>
                <div class="row mb-3">
                        <div class="col-md-2">Tanggal Pengembalian</div>
                        <div class="col-md-8">
                           <input type="date" class="form-control" value="<?=  $data['tanggal_pengembalian']; ?>" name="tanggal_pengembalian">
                        </div>
                </div>
                <div class="row mb-3">
                        <div class="col-md-2">Status Peminjaman</div>
                        <div class="col-md-8">
                           <select name="status_peminjaman" class="form-control">
                            <option value="dipinjam" <?php if( $data['status_peminjaman'] == 'dipinjam') echo'selected'; ?>>Dipinjam</option>
                            <option value="dikembalikan" <?php if( $data['status_peminjaman'] == 'dikembalikan') echo'selected'; ?>>Dikembalikan</option>
                           </select>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mb-2">
                       <!-- <div class="row gap-2"> -->
                       <button type="submit" class="btn btn-primary btn-md col-12 col-md-8 col-lg-1 mb-2" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary btn-md col-12 col-md-8 col-lg-1 mb-2">Reset</button>
                        <a href="?page=laporan_pengembalian" class="btn btn-danger btn-md col-12 col-md-8 col-lg-1 mb-2">Kembali</a>
                       <!-- </div> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>