<h1 class="mt-4">Ubah Data User</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form method="post">
                <?php
                 $id = $_GET['id'];
                 $query = mysqli_query($koneksi, "SELECT*FROM user WHERE id_user = '$id'");
                 $data = mysqli_fetch_array($query);
                    if(isset ($_POST['submit'])){
                        $nama = $_POST['nama'];
                        $username = $_POST['username'];
                        $alamat = $_POST['alamat'];
                        $no_telpon = $_POST['no_telpon'];
                        $level = $_POST['level'];

                        $query = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', alamat='$alamat', no_telpon='$no_telpon', level='$level' WHERE id_user=$id");

                        if ($query){
                            echo '<script>alert("Ubah data berhasil"); 
                             location.href = "dashboard.php?page=user";
                            </script>';
                            
                        }else{
                            echo '<script>alert("Ubah data gagal"); </script>';
                        }
                    }
                    ?>
                <div class="row mb-3">
                    <div class="col-md-2">Nama Lengkap</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" value="<?= $data ['nama']; ?>">
                        </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-2">Username</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="username" value="<?= $data ['username']; ?>">
                        </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-2">Alamat</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="alamat" value="<?= $data ['alamat']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-2">No Telpon</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="no_telpon" value="<?= $data ['no_telpon']; ?>">
                        </div>
                </div>

                <!-- <div class="row mb-3">
                        <div class="col-md-2">Level</div>
                        <div class="col-md-8">
                            <select class="form-control" name="level" required>
                                <option value="">-- Pilih Level --</option> -->
                                <!-- Level user yang sudah ada di database ditampilkan sebagai pilihan yang terpilih (selected). -->
                                <!-- <option value="admin" <?php if($data['level'] == 'admin') echo 'selected'; ?>>Admin</option>
                                <option value="peminjam" <?php if($data['level'] == 'peminjam') echo 'selected'; ?>>Peminjam</option>
                            </select>
                        </div>
                    </div> -->


                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    <button type="submit" class="btn btn-primary btn-md " name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary btn-md ">Reset</button>
                        <a href="?page=user" class="btn btn-danger btn-md ">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>