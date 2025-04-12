<h1 class="mt-4 text-start">Laporan Pengembalian Buku</h1>
<div class="row">
<div class="info mt-5">
        <?php
        if ($_SESSION['user']['level'] !='peminjam') :
        ?>
        <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Pengembalian</a>
        <!-- <a href="cetak.php" target="blank" class="btn btn-primary">Cetak Data</a> -->
        <?php endif; ?>
        </div>
    <div class="col-md-12 rounded-3">    
        <table class="table table-bordered table-hover shadow bg-body mt-5" id="dataTable" width="100%" cellspacing="0">
        
        <thead class="bg-info text-white text-center">
        <tr>    
                <th>Nama</th>
                <th>Buku</th>
                <th>Penerbit</th>
                <th>Penulis</th>
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
            <tbody>
            <tr>
                <!-- <td><?= $i++; ?></td> -->
                <td><?= $data['nama']; ?></td> 
                <td><?= $data['judul']; ?></td> 
                <td><?= $data['penerbit']; ?></td>
                <td><?= $data['penerbit']; ?></td>  
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
                    $tanggal_pengembalian = $data['tanggal_pengembalian'];
                    $tanggal_pinjam = $data['tanggal_peminjaman'];
                    $tanggal_jatuh_tempo = date('Y-m-d', strtotime($tanggal_pinjam . ' + 5 days'));

                    $denda = 0;
                    if (strtotime($tanggal_pengembalian) > strtotime($tanggal_jatuh_tempo)) {
                        // Hitung jumlah hari keterlambatan (tanpa hari Minggu)
                        $start = new DateTime($tanggal_jatuh_tempo);
                        $end = new DateTime($tanggal_pengembalian);
                        $interval = new DateInterval('P1D');
                        $daterange = new DatePeriod($start, $interval, $end->modify('+1 day'));

                        $jumlahHariKeterlambatan = 0;
                        foreach ($daterange as $date) {
                            if ($date->format('w') != 0) { // 0 adalah Minggu
                                $jumlahHariKeterlambatan++;
                            }
                        }

                        $denda = $jumlahHariKeterlambatan * 1000;
                    }

                    echo number_format($denda, 0, ',', '.');
                ?>
                </td> 
                <td>
                    <?php if ($data['status_peminjaman'] == 'Dikembalikan') : ?>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
                        href="?page=peminjaman_hapus&&id=<?= $data['id_peminjaman']?>" 
                        class="btn btn-danger">
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
<style>
    h1{
        font-family: "Roboto", serif;
        font-optical-sizing: auto;
        font-style: normal;
        font-variation-settings:"wdth" 100;
    }
</style>