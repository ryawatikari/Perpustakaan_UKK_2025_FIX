<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form method="post">
                <?php
                 $id = $_GET['id'];
                    if(isset ($_POST['submit'])){
                        $kategori = $_POST['kategori'];
                        $query = mysqli_query($koneksi, "UPDATE kategori set kategori='$kategori' WHERE id_kategori=$id");

                        if ($query){
                            echo '<script>alert("Ubah data berhasil"); 
                             location.href = "dashboard.php?page=kategori";
                            </script>';
                            
                        }else{
                            echo '<script>alert("Ubah data gagal"); </script>';
                        }
                    }
                   
                    $query = mysqli_query($koneksi, "SELECT*FROM kategori where id_kategori=$id");
                    $data = mysqli_fetch_array($query);
                ?>

                <div class="row mb-3">
                    <div class="col-md-2">Nama Kategori</div>
                    <div class="col-md-8">
                        <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori']; ?>" name="kategori">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    <button type="submit" class="btn btn-primary btn-md col-12 col-md-8 col-lg-1 mb-2" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary btn-md col-12 col-md-8 col-lg-1 mb-2">Reset</button>
                        <a href="?page=kategori" class="btn btn-danger btn-md col-12 col-md-8 col-lg-1 mb-2">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>