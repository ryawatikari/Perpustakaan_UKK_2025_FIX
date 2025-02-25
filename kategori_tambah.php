<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form method="post">

            <!-- membuat logic menambahan tambah data kategori -->
                <?php
                    if(isset ($_POST['submit'])){
                        //strtolower ubah data menjadi lowercase
                        $kategori = strtolower($_POST['kategori']);

                        $cek = mysqli_query ($koneksi, "SELECT*FROM kategori WHERE LOWER(kategori)='$kategori'");
                        $check = mysqli_num_rows($cek);
                        if ($check > 0){
                            echo "Data yang dimasukkan sama";
                        } else{
                            $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) VALUES('$kategori')");//insert into utk menginput data ke database
                            if ($query){
                                echo '<script>alert("Tambah data berhasil");
                                    location.href = "dashboard.php?page=kategori";
                                </script>';
                                
                            }else{
                                echo '<script>alert("Tambah data gagal"); </script>';
                            }
                        }
                        
                    }
                ?>

                <div class="row mb-3">
                    <div class="col-md-2">Kategori</div>
                    <div class="col-md-8">
                        <input type="text" name="kategori" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>