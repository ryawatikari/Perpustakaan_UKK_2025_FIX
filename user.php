<title>User</title>
<h1 class="mt-4">User Management</h1>
<div class="">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
            <a href="?page=user_tambah" class="btn btn-primary mb-2"> + Tambah Data</a>
                <table id="myTable" class="table table-bordered table-hover bg-light">
                    <thead class="mb-3 bg-info text-center text-white">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Level</th>
                            <th>Aksi</th>
                    </thead>
                    <?php 
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM user");
                        //  mysqli_fetch_array mengambil data array asosiatif
                        while($data = mysqli_fetch_array($query)){
                            ?>
                         <tbody>
                            <!-- belum tambahkan level user -->
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['no_telpon']; ?></td>
                                <td><?php echo $data['level']; ?></td>
                                <td>
                                    <a href="?page=user_ubah&&id=<?php echo $data['id_user']; ?>" class="btn btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return confirm('Apakah anda yakin mau menghapus data ini')" href="?page=user_hapus&&id=<?php echo $data['id_user']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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
