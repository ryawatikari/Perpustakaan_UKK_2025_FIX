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
                        $username = $_POST['username'];
                        $level = $_POST['level'];

                        $query = mysqli_query($koneksi, "UPDATE user SET username='$username', level='$level' WHERE id_user=$id");

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
                            <input type="text" class="form-control" name="username" value="<?= $data ['username']; ?>">
                        </div>
                    </div>

<<<<<<< Updated upstream
                <!-- <div class="row mb-3">
=======
                <div class="row mb-3">
>>>>>>> Stashed changes
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