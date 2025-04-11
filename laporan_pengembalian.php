
<h1 class="mt-4 text-start">Laporan Pengembalian Buku</h1>
<div class="row">
<div class="info mt-5">
        <?php
        if ($_SESSION['user']['level'] !='peminjam') :
        ?>
        <a href="?page=laporan_pengembalian_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Pengembalian</a>
        <!-- <a href="cetak.php" target="blank" class="btn btn-primary">Cetak Data</a> -->
        <?php endif; ?>
        </div>
    <div class="col-md-12  mt-5">    
        <table id="myTable" class="table table-bordered table-hover shadow bg-body" id="dataTable" width="100%" cellspacing="0">
        
        <thead class="bg-info text-white text-center">
        <tr>    
                <th>No</th>
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
                <td><?= $i++; ?></td>
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
                    <!-- <a onclick="return confirm('Apakah denda sudah lunas?')" href="?page=pengembalian&id_peminjaman=<?= $data['id_peminjaman']?>" class="btn btn-success">Dikembalikan</a> -->
                    <a href="?page=laporan_peminjaman_ubah&&id=<?= $data['id_peminjaman']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini')" href="?page=peminjaman_hapus&&id=<?= $data['id_peminjaman']?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                </td>
            </tr>
        </tbody>

            
            <?php endwhile; ?>            
            
        </table>
    </div>
</div>
<style setup>
    h1{
        font-family: "Roboto", serif;
        font-optical-sizing: auto;
        font-style: normal;
        font-variation-settings:"wdth" 100;
    }
</style>