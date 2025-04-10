<h1 class="m-4">Buku</h1>
<div class="mt-5">
    <div class="card-body m-4">
        <!-- Pencarian Buku -->
        <div class="row mb-3">
            <div class="col-md-12">
                <form method="GET" action="">
                    <input type="hidden" name="page" value="buku">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Judul Buku" value="<?= htmlspecialchars($_GET['nama'] ?? '') ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="<?= htmlspecialchars($_GET['tahun_terbit'] ?? '') ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="<?= htmlspecialchars($_GET['penulis'] ?? '') ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                            <button type="submit" class="btn btn-primary w-100">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php if ($_SESSION['user']['level'] == 'admin') : ?>
                    <a href="?page=buku_tambah" class="btn btn-primary mb-3">Tambah Data</a>
                <?php endif; ?>

                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered bg-light">
                        
                        <thead class="bg-info text-light text-center">
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>No ISBN</th>
                                <th>Sinopsis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-start bg-info-subtle">
                            <?php
                            $i = 1;
                            $nama = $_GET['nama'] ?? '';
                            $tahun_terbit = $_GET['tahun_terbit'] ?? '';
                            $penulis = $_GET['penulis'] ?? '';

                            $query = "SELECT buku.*, kategori.kategori FROM buku 
                                      JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE 1=1";

                            if ($nama != '') {
                                $query .= " AND buku.judul LIKE '%" . mysqli_real_escape_string($koneksi, $nama) . "%'";
                            }
                            if ($tahun_terbit != '') {
                                $query .= " AND buku.tahun_terbit LIKE '%" . mysqli_real_escape_string($koneksi, $tahun_terbit) . "%'";
                            }
                            if ($penulis != '') {
                                $query .= " AND buku.penulis LIKE '%" . mysqli_real_escape_string($koneksi, $penulis) . "%'";
                            }

                            $result = mysqli_query($koneksi, $query);
                            while ($data = mysqli_fetch_array($result)) :
                            ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= htmlspecialchars($data['kategori']); ?></td>
                                    <td><?= htmlspecialchars($data['judul']); ?></td>
                                    <td><img src="upload/<?= htmlspecialchars($data['gambar']); ?>" width="80" alt="cover"></td>
                                    <td><?= htmlspecialchars($data['penulis']); ?></td>
                                    <td><?= htmlspecialchars($data['penerbit']); ?></td>
                                    <td><?= htmlspecialchars($data['tahun_terbit']); ?></td>
                                    <td><?= htmlspecialchars($data['isbn']); ?></td>
                                    <td><?= htmlspecialchars($data['sinopsis']); ?></td>
                                    <td>
                                        <div class="d-flex flex-column flex-md-row">
                                            <button class="btn btn-primary mb-2 mb-md-0 me-md-2" data-bs-toggle="modal" data-bs-target="#detailModal" data-id="<?= $data['id_buku'] ?>"><i class="fa-solid fa-circle-info"></i></button>
                                            <?php if ($_SESSION['user']['level'] != 'peminjam') : ?>
                                                <a href="?page=buku_ubah&&id=<?= $data['id_buku'] ?>" class="btn btn-warning mb-2 mb-md-0 me-md-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a onclick="return confirm('Apakah Anda yakin menghapus data ini?')" href="?page=buku_hapus&&id=<?= $data['id_buku'] ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Book details will be loaded here -->
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var detailModal = document.getElementById('detailModal');
    detailModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var idBuku = button.getAttribute('data-id');

        var modalBody = detailModal.querySelector('.modal-body');
        modalBody.innerHTML = 'Loading...';

        fetch('buku_detail.php?id=' + idBuku)
            .then(response => response.text())
            .then(data => {
                modalBody.innerHTML = data;
            });
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* .card {
        background-color: #ffffff;
    } */
    .display{
        border: 1px solid #dfe6e9;
    }

    .btn-warning:hover {
        background-color: rgb(243, 156, 18);
        border-color: rgb(243, 156, 18);
    }

    /* Responsive Table */
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        th,
        td {
            padding: 8px;
        }
    }
</style>
