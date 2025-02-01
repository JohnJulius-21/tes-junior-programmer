<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Produk</title>
</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col mt-3">
                <h1>Daftar Produk</h1>
            </div>
            <div class="col d-flex justify-content-end mb-3 mt-3">
                <a class="btn btn-primary" href="<?= site_url('produk/create'); ?>">Tambah Produk</a>
            </div>
        </div>
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success mt-3" role="alert">
                <?= $this->session->flashdata('success'); ?>
            </div>
        <?php elseif ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger" mt-3 role="alert">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produk as $p): ?>
                    <tr>
                        <td><?= $p['id_produk']; ?></td>
                        <td><?= $p['nama_produk']; ?></td>
                        <td>Rp <?= number_format($p['harga'], 0, ',', '.'); ?></td>
                        <td><?= $p['nama_kategori']; ?></td>
                        <td><?= $p['nama_status']; ?></td>
                        <td>
                            <a class="btn btn-warning mb-3"
                                href="<?= site_url('produk/edit/' . $p['id_produk']); ?>">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-id="<?= $p['id_produk']; ?>"
                                data-nama="<?= $p['nama_produk']; ?>">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus produk <strong id="produk-nama"></strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <!-- Form to handle deletion -->
                    <form id="delete-form" action="<?= site_url('produk/hapus/'. $p['id_produk']) ?>" method="POST">
                        <!-- <input type="hidden" id="produk-id" name="id_produk"> -->
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

<script>
    // JavaScript to pass product ID into the form when delete button is clicked
    var deleteButtons = document.querySelectorAll('.btn-danger');

    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var productId = this.getAttribute('data-id');
            var productName = this.getAttribute('data-nama');

            // Set the product ID and name in the modal
            document.getElementById('produk-id').value = productId;
            document.getElementById('produk-nama').textContent = productName;
        });
    });
</script>

</html>