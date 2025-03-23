<h1 class="mt-4">Tambah User</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form method="post">

            <!-- membuat logic menambahan tambah data kategori -->
                <?php
                    if(isset ($_POST['submit'])){
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = md5($_POST['password']); // Enkripsi password
                        $alamat = $_POST['alamat'];
                        $no_telpon = $_POST['no_telpon'];
                        $level = $_POST['level'];

                        $query = mysqli_query($koneksi, "INSERT INTO user(username, email, password, alamat, no_telpon, level) values('$username', '$email', '$password' , '$alamat' , '$no_telpon' , '$level')");
                            //insert into utk menginput data ke database
                            if ($query){
                                echo '<script>alert("Tambah data berhasil");
                                    location.href = "dashboard.php?page=user";
                                </script>';
                                
                            }else{
                                echo '<script>alert("Tambah data gagal"); </script>';
                            }
                    }
                ?>

                <div class="row mb-3">
                    <div class="col-md-2">Nama Lengkap</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>

                <div class="row mb-3">
                    <div class="col-md-2">Email</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>

                <div class="row mb-3">
                    <div class="col-md-2">Password</div>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-2">Alamat</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="alamat">
                        </div>
                    </div>
                <div class="row mb-3">
                    <div class="col-md-2">No Telpon</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="no_telpon">
                        </div>
                    </div>
                <!-- Dropdown untuk Level User -->
                 <div class="row mb-3">
                            <div class="col-md-2">Level</div>
                            <div class="col-md-8">
                                <select class="form-control" name="level" required>
                                    <option value="">-- Pilih Level --</option>
                                    <option value="admin">Admin</option>
                                    <option value="peminjam">Peminjam</option>
                                </select>
                            </div>
                        </div>

                <div class="row mb-3">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=user" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>