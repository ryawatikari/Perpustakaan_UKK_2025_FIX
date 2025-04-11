<h1 class="mt-4">Kategori Buku</h1>
<div class="">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
            <a href="?page=kategori_tambah" class="btn btn-primary mb-2"> + Tambah Data</a>
                <table id="myTable"  class="table table-hover mt-3 table-responsive bg-light">
                    <thead class="mb-3 bg-info text-center text-white">
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                    </thead>
                    <?php 
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM kategori");
                        //  mysqli_fetch_array mengambil data array asosiatif
                        while($data = mysqli_fetch_array($query)){
                            ?>
                         <tbody>
                     
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td><?php echo $data['kategori']; ?></td>
                                <td>
                                    <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return confirm('Apakah anda yakin mau menghapus data ini')" href="?page=kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                          
                         </tbody>
                    <?php 
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>
</div>

<style setup>
 
</style>