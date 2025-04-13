<title>Tambah peminjaman</title>
<h1 class="mt-4">Pinjam Buku? Isi Dulu Datanya!</h1>
<div class="card text-bg-light">
    <div class="card-body">
        <div class="row">
            <form method="post">
            <?php
                if(isset($_POST['submit'])){
                    $id_buku = $_POST['id_buku'];
                    $id_user = $_POST['id_user'];
                    
                    $cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
                    if (mysqli_num_rows($cek_user) == 0){
                        echo '<script>alert("Peminjam tidak ditemukan. Pastikan kamu memilih dari daftar!");</script>';
                    } else {
                        $tanggal_sekarang = date("Y-m-d");
                        $tanggal_jatuh_tempo = date('Y-m-d', strtotime("+5 days"));

                        $cek_peminjaman = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM peminjaman WHERE id_user='$id_user' AND status_peminjaman='dipinjam'");
                        $data = mysqli_fetch_assoc($cek_peminjaman);
                        $jumlah_peminjaman = $data['total'];

                        $cek_buku_sama = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_user='$id_user' AND id_buku='$id_buku' AND status_peminjaman='dipinjam'");

                        if (mysqli_num_rows($cek_buku_sama) > 0){
                            echo '<script>alert("Kamu sudah meminjam buku ini."); window.location.href = "?page=laporan"</script>';
                        } else {
                            if ($id_user === 'admin' || $jumlah_peminjaman < 2) {
                                $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku, id_user, tanggal_peminjaman, tanggal_jatuh_tempo, status_peminjaman) 
                                                                VALUES('$id_buku', '$id_user', '$tanggal_sekarang', '$tanggal_jatuh_tempo', 'dipinjam')");
                                if ($query) {
                                    echo '<script>alert("Peminjaman Berhasil."); window.location.href = "?page=laporan";</script>';
                                } else {
                                    echo '<script>alert("Peminjaman Gagal."); window.location.href = "?page=laporan"</script>';
                                }
                            } else {
                                echo '<script>alert("User sudah mencapai batas maksimal peminjaman (2 buku).");</script>';
                            }
                        }
                    }
                }              
                ?>

                <div class="row">
                       <!-- menampilkan nama Peminjam -->
                       <div class="row">
                        <div class="row mb-3">
                            <div class="col-md-2">Nama Lengkap</div>
                            <div class="col-md-8">
                            <input type="text" id="cariPeminjam" class="form-control" placeholder="Cari peminjam">
                            <div id="dropdownPeminjam" class="dropdown-menu"></div>
                            <input type="hidden" id="id_user">

                            <script>
                                document.getElementById('cariPeminjam').addEventListener('input', function () {
                                    var query = this.value;
                                    var dropdown = document.getElementById('dropdownPeminjam');

                                    if (query.length > 0) {
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('GET', 'cari_peminjam.php?q=' + encodeURIComponent(query), true);
                                        xhr.onload = function () {
                                            if (this.status == 200) {
                                                var peminjams = JSON.parse(this.responseText);
                                                dropdown.innerHTML = '';

                                                if (peminjams.length > 0) {
                                                    peminjams.forEach(function (peminjam) {
                                                        var item = document.createElement('div');
                                                        item.className = 'dropdown-item';
                                                        item.textContent = peminjam.nama;
                                                        item.dataset.id = peminjam.id_user;

                                                        item.addEventListener('click', function () {
                                                            document.getElementById('cariPeminjam').value = peminjam.nama;
                                                            document.getElementById('id_user').value = peminjam.id_user;
                                                            dropdown.style.display = 'none';
                                                        });

                                                        dropdown.appendChild(item);
                                                    });

                                                    dropdown.style.display = 'block';
                                                } else {
                                                    dropdown.style.display = 'none';
                                                }
                                            }
                                        };
                                        xhr.send();
                                    } else {
                                        dropdown.style.display = 'none';
                                    }
                                });

                                document.addEventListener('click', function (event) {
                                    var dropdown = document.getElementById('dropdownPeminjam');
                                    var input = document.getElementById('cariPeminjam');

                                    if (!input.contains(event.target) && !dropdown.contains(event.target)) {
                                        dropdown.style.display = 'none';
                                    }
                                });
                            </script>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2">Buku</div>
                            <div class="col-md-8">
                            <input type="text" id="cariBuku" class="form-control" placeholder="Cari buku">
                            <div id="dropdownBuku" class="dropdown-menu"></div>
                            <input type="hidden" id="id_buku" name="id_buku">

                            <script>
                                document.getElementById('cariBuku').addEventListener('input', function () {
                                    var query = this.value;
                                    var dropdown = document.getElementById('dropdownBuku');

                                    if (query.length > 0) {
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('GET', 'cari_buku.php?q=' + encodeURIComponent(query), true);
                                        xhr.onload = function () {
                                            if (this.status == 200) {
                                                var bukus = JSON.parse(this.responseText);
                                                dropdown.innerHTML = '';

                                                if (bukus.length > 0) {
                                                    bukus.forEach(function (buku) {
                                                        var item = document.createElement('div');
                                                        item.className = 'dropdown-item';
                                                        item.textContent = buku.judul;
                                                        item.dataset.id = buku.id_buku;

                                                        item.addEventListener('click', function () {
                                                            document.getElementById('cariBuku').value = buku.judul;
                                                            document.getElementById('id_buku').value = buku.id_buku;
                                                            dropdown.style.display = 'none';
                                                        });

                                                        dropdown.appendChild(item);
                                                    });

                                                    dropdown.style.display = 'block';
                                                } else {
                                                    dropdown.style.display = 'none';
                                                }
                                            }
                                        };
                                        xhr.send();
                                    } else {
                                        dropdown.style.display = 'none';
                                    }
                                });

                                document.addEventListener('click', function (event) {
                                    var dropdown = document.getElementById('dropdownBuku');
                                    var input = document.getElementById('cariBuku');

                                    if (!input.contains(event.target) && !dropdown.contains(event.target)) {
                                        dropdown.style.display = 'none';
                                    }
                                });
                            </script>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mb-2">
                       <!-- <div class="row gap-2"> -->
                       <button type="submit" class="btn btn-primary btn-md col-12 col-md-8 col-lg-1 mb-2" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary btn-md col-12 col-md-8 col-lg-1 mb-2">Reset</button>
                        <a href="?page=laporan" class="btn btn-danger btn-md col-12 col-md-8 col-lg-1 mb-2">Kembali</a>
                       <!-- </div> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>