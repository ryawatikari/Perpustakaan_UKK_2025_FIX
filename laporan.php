
<!-- tes commit otomatis -->
<h1 class="mt-4">Laporan Peminjaman</h1>
<div class="row">
<div class="info mt-5">
        <?php
        if ($_SESSION['user']['level'] !='peminjam') :
        ?>
        <a href="?page=laporan_peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Peminjaman</a>
        <a href="cetak.php" target="blank" class="btn btn-primary ">Cetak Data</a>
        <?php endif; ?>
        </div>
    <div class="col-md-12 mt-4">    
        <div class="table-responsive">
        <table id="myTable" class="table table-striped- table-bordered table-hover bg-light">
        <thead class="bg-info text-light text-center">
        <tr>
                <th>Nama</th>
                <th>Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Denda</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr> 
        </thead>           
            <?php
                $i=1;
                if ($_SESSION['user']['level'] == 'peminjam'){
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman JOIN user on
                    user.id_user=peminjaman.id_user JOIN buku ON buku.id_buku=peminjaman.id_buku where peminjaman.id_user=".$_SESSION['user']['id_user']);
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman JOIN user on
                    user.id_user=peminjaman.id_user JOIN buku ON buku.id_buku=peminjaman.id_buku");
                }
                while ($data = mysqli_fetch_array($query)) :
            ?>
            <tbody class="text-start">
            <tr>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['judul']; ?></td> 
                <td><?= $data['penerbit']; ?></td> 
                <td><?= $data['penulis']; ?></td> 
                <td><?= $data['tanggal_peminjaman']; ?></td> 
                <td><?= $data['tanggal_pengembalian']; ?></td> 
                <td>
                    <?php
                        // Menentukan batas maksimal pengembalian (5 hari setelah peminjaman)
                        $tanggal_jatuh_tempo = date('Y-m-d', strtotime($data['tanggal_peminjaman'] . ' + 5 days'));
                        echo date('d-m-Y', strtotime($tanggal_jatuh_tempo));
                    ?>
                </td>  
                <td>
                    <?php
                        // Menentukan denda jika pengembalian melebihi jatuh tempo
                        $tanggal_pengembalian = $data['tanggal_pengembalian'];
                        $jatuh_tempo = strtotime($tanggal_jatuh_tempo);
                        $tanggal_kembali = strtotime($tanggal_pengembalian);

                        $denda = 0;
                        if ($tanggal_kembali > $jatuh_tempo) {
                            $denda = ($tanggal_kembali - $jatuh_tempo) / (60 * 60 * 24) * 1000;
                        }
                        echo number_format($denda, 0, ',', '.');
                    ?>
                </td> 
                <td><?= $data['status_peminjaman']; ?></td> 
                <td>
                    <?php if ($_SESSION['user']['level'] != 'peminjam') : ?>
                        <a onclick="return confirm('Buku berhasil dikembalikan, lanjutkan?')" href="?page=pengembalian&id_peminjaman=<?= $data['id_peminjaman']?>" class="btn btn-success">
                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                        </a>
                        <a href="?page=laporan_peminjaman_ubah&&id=<?= $data['id_peminjaman']?>" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    <?php endif; ?>

                    <?php
                        // Pastikan pengecekan status tidak case-sensitive
                        $status_peminjaman = strtolower($data['status_peminjaman']);
                        // admin bisa akses button hapus kapan saja baik status dikembalikan maupun dipinjam sedangkan peminjam hanya bisa menghapus data yang statusnya sudah dikembalikan
                        if ($_SESSION['user']['level'] == 'admin' || ($status_peminjaman == 'dikembalikan' && $_SESSION['user']['level'] == 'peminjam')) :
                    ?>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=laporan_peminjaman_hapus&&id=<?= $data['id_peminjaman']?>" class="btn btn-danger">
                            <i class="fa-regular fa-trash-can"></i>
                        </a>
                    <?php endif; ?>
                </td>
            </tr>

        </tbody>

            
            <?php endwhile; ?>            
            
        </table>
        </div>
    </div>
</div>