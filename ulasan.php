<h1 class="m-4">Ulasan</h1>
<div class="mt-5">
    <div class="card-body m-4">
        <div class="row">
            <div class="col-md-12">
            <a href="?page=ulasan_tambah" class="btn btn-primary mb-2"> + Tambah Data</a>
                <div class="table-responsive">
                <table class="table table-bordered mt-3 w-75 shadow bg-white" id="dataTable" cellspacing="0">
                        <colgroup> 
                            <col style="width: 4%;" /> 
                            <col style="width: 8%;" />
                            <col style="width: 10%;" />
                            <col style="width: 19%;" />
                            <col style="width: 6%;" />
                            <col style="width: 10%;" /> 
                         </colgroup>
                    <thead class="bg-info text-center">
                        <th>No</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                        <th>Aksi</th>
                    </thead>
                  
                    <?php 
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tbody class="text-center">
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['ulasan']; ?></td>
                                <td><?php echo $data['rating']; ?></td>
                                <td class="align-items-between">
                                    <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return confirm('Apakah anda yakin mau menghapus data ini')" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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
</div>
<style setup>
  
  tbody:hover {
    background-color:#dfe6e9; 
    color: #000; 
    transition: background-color 0.3s ease-in-out ;
    }



    /* responsive tabel*/
    @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
            th, td {
                padding: 8px;
            }
        }
</style>

