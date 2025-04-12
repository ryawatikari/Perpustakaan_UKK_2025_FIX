<h1 class="mt-5">Ubah Data Buku</h1>
<div class="card text-bg-light">
    <div class="card-body">
        <div class="row">
            <form method="post">
                <?php
                    $id = $_GET['id'];
                    if(isset ($_POST['submit'])){
                        $id_kategori = $_POST['id_kategori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $sinopsis = $_POST['sinopsis'];
                        $query = mysqli_query($koneksi, "UPDATE buku SET id_kategori='$id_kategori', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', sinopsis='$sinopsis' WHERE id_buku=$id");
                        if ($query){
                            // window.history.back();
                            echo '<script>alert("Ubah data berhasil"); 
                                location.href = "dashboard.php?page=buku";
                            </script>';
                            
                        }else{
                            echo '<script>alert("Ubah data gagal"); </script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE id_buku='$id'");
                    $data = mysqli_fetch_array($query);
                ?>

                    <div class="row mb-3">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" class="form-control">
                                <?php
                                    $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while($kategori = mysqli_fetch_array($kat)){
                                        ?>
                                        <option <?php if($kategori['id_kategori'] == $data['id_kategori']) echo 'selected'; ?> value="<?php echo $kategori['id_kategori']; ?>">
                                            <?php echo $kategori['kategori']; ?>
                                        </option>
                                        <?php 
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                 <div class="row mb-3">
                        <div class="col-md-2">Gambar</div>
                        <div class="col-md-8">
                            <input type="file" class="form-control" name="gambar">
                            <?php if ($data['gambar']) : ?>
                                <img src="upload/<?= $data['gambar']; ?>" width="100">
                            <?php endif; ?>
                        </div>
                </div>

                <div class="row mb-3">
                <div class="col-md-2">Judul</div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="judul" value="<?= $data ['judul']; ?>">
                    </div>
                </div>
                
                <div class="row mb-3">
                <div class="col-md-2">Penulis</div>
                    <div class="col-md-8">
                        <input type="text"  class="form-control" name="penulis" value="<?= $data ['penulis']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Penerbit</div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="penerbit" value="<?= $data ['penerbit']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Tahun Terbit</div>
                    <div class="col-md-8">
                        <input type="number"  class="form-control" name="tahun_terbit" value="<?= $data ['tahun_terbit']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Nomor ISBN</div>
                    <div class="col-md-8">
                        <input type="number"  class="form-control" name="isbn" value="<?= $data ['isbn']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Deskripsi</div>
                    <div class="col-md-8">
                        <textarea name="sinopsis" rows="5" class="form-control"><?= $data ['sinopsis']; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-md col-12 col-md-8 col-lg-1 mb-2" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary btn-md col-12 col-md-8 col-lg-1 mb-2">Reset</button>
                        <a href="?page=buku" class="btn btn-danger btn-md col-12 col-md-8 col-lg-1 mb-2">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>