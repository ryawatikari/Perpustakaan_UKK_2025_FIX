<h1 class="mt-4">Ulasan Buku</h1>
<div class="card text-bg-light">
    <div class="card-body">
        <div class="row">
            <form method="post">
                <?php
                    $id = $_GET['id']; 
                    $query = mysqli_query($koneksi, "SELECT*FROM ulasan WHERE id_ulasan = '$id'");
                    $data = mysqli_fetch_array($query);
                    if(isset($_POST['submit'])){
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "UPDATE ulasan set id_buku='$id_buku', ulasan='$ulasan', rating='$rating' WHERE id_ulasan=$id");

                        if ($query){
                            echo '<script>alert("Ubah data berhasil"); location.href = "dashboard.php?page=ulasan";</script>'; 
                        } else {
                            echo '<script>alert("Ubah data gagal");</script>';
                        }
                       
                    }
                ?>

                <div class="row mb-3">
                    <div class="col-md-2">Buku</div>
                    <div class="col-md-8">
                        <select name="id_buku" class="form-control">
                            <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while($buku = mysqli_fetch_array($buk)){
                                    ?>
                                    <option  <?php if($data['id_buku'] == $buku['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku']; ?>">
                                    <?php echo $buku['judul']; ?>
                                    </option>
                                    <?php 
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">Ulasan</div>
                    <div class="col-md-8">
                        <textarea name="ulasan" rows="5" class="form-control"><?= $data['ulasan'] ?? ''; ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">Rating</div>
                    <div class="col-md-8">
                        <select name="rating" class="form-control">
                            <?php
                                for($i = 1; $i <= 10; $i++){
                                    ?>
                                    <option <?php if($data['rating'] == $i) echo 'selected'; ?>><?php echo $i; ?>
                                    </option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mb-2">
                        <button type="submit" class="btn btn-primary btn-md col-12 col-md-8 col-lg-1 mb-2" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary btn-md col-12 col-md-8 col-lg-1 mb-2">Reset</button>
                        <a href="?page=ulasan" class="btn btn-danger btn-md col-12 col-md-8 col-lg-1 mb-2">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
