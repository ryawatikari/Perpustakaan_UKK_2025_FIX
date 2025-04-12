<h1 class="mt-4">Isi Data Buku</h1>
<div class="card text-bg-light">
    <div class="card-body">
        <div class="row">
            <form method="post" enctype="multipart/form-data">
                <?php
                    if(isset ($_POST['submit'])){
                        $id_kategori = $_POST['id_kategori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        if ($tahun_terbit > 2024) {
                            echo "Tahun terbit tidak boleh lebih dari 2024.";
                        } else {
                            echo "Tahun valid.";
                        }
                        $isbn = $_POST['isbn'];
                        $sinopsis = $_POST['sinopsis'];

                         $gambar = $_FILES['gambar'];// ambil gambar yang diupload
                         $upload_dir = "upload/"; // Direktori penyimpanan gambar

                         //beri nama supaya tidak kembar
                         $ext = pathinfo($gambar['name'], PATHINFO_EXTENSION);
                         $filename = time() . "." . $ext; // Rename agar unik
                         $file_path = $upload_dir . $filename;

                         $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
                        if (!in_array(strtolower($ext), $allowed_ext)) {
                            die("Format gambar tidak didukung! Hanya JPG, JPEG, PNG, GIF.");
                        }
                        if (move_uploaded_file($gambar['tmp_name'], $file_path)) {
                            // Cek apakah judul sudah ada
                            $cek = mysqli_query($koneksi, "SELECT * FROM buku WHERE judul='$judul'");
                            $check = mysqli_num_rows($cek);
                            if ($check > 0) {
                                echo "Data pernah dimasukkan";
                            } else {
                                // Simpan ke database
                                $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori, judul, penulis, penerbit, tahun_terbit, isbn, sinopsis, gambar)
                                VALUES('$id_kategori', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$isbn', '$sinopsis', '$filename')");

                                if ($query) {
                                    echo '<script>alert("Tambah data berhasil"); window.location.href ="?page=buku";</script>';
                                } else {
                                    echo '<script>alert("Tambah data gagal!");</script>';
                                }
                            }
                        } else {
                            echo '<script>alert("Gagal mengunggah gambar.");</script>';
                        }
                    }
                 ?>


                <div class="row">
                <div class="row mb-3">
                        <div class="col-md-2">Upload Gambar</div>
                        <div class="col-md-8"><input type="file" class="form-control" name="gambar" required></div>
                </div>
                <div class="row mb-3">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" class="form-control">
                                <?php
                                    $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while($kategori = mysqli_fetch_array($kat)){
                                        ?>
                                        <option value="<?php echo $kategori['id_kategori']; ?>">
                                            <?php echo $kategori['kategori']; ?>
                                        </option>
                                        <?php 
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                <div class="row mb-3">
                <div class="col-md-2">Judul</div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="judul">
                    </div>
                </div>
                
                <div class="row mb-3">
                <div class="col-md-2">Penulis</div>
                    <div class="col-md-8">
                        <input type="text"  class="form-control" name="penulis">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Penerbit</div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="penerbit">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Tahun Terbit</div>
                    <div class="col-md-8">
                        <input type="number"  class="form-control" name="tahun_terbit" max="2025">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Nomor ISBN</div>
                    <div class="col-md-8">
                        <input type="number"  class="form-control" name="isbn">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-2">Sinopsis</div>
                    <div class="col-md-8">
                        <textarea name="sinopsis" rows="5" class="form-control" ></textarea>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mb-2">
                       <!-- <div class="row gap-2"> -->
                       <button type="submit" class="btn btn-primary btn-md col-12 col-md-8 col-lg-1 mb-2" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary btn-md col-12 col-md-8 col-lg-1 mb-2">Reset</button>
                        <a href="?page=buku" class="btn btn-danger btn-md col-12 col-md-8 col-lg-1 mb-2">Kembali</a>
                       <!-- </div> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card{
        background-color: #dff9fb;
    }
</style>