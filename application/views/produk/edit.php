<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Produk</title>
</head>

<body>
    <div class="container">
        <h2 class="mb-3 mt-3">Edit Produk</h2>
        <div class="card">
            <form action="<?php echo site_url('produk/update/'.$produk->id_produk); ?>" method="post">
                <div class="card-body">
                    <input type="hidden" name="id_produk" value="<?= $produk->id_produk ?>">

                    <div class="mb-3">
                        <label class="form-label" for="nama_produk">Nama Produk:</label>
                        <input class="form-control" type="text" name="nama_produk" value="<?= set_value('nama_produk', $produk->nama_produk) ?>">
                        <?= form_error('nama_produk', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="harga">Harga:</label>
                        <input class="form-control" type="number" name="harga" value="<?= set_value('harga', $produk->harga) ?>">
                        <?= form_error('harga', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="kategori_id">Kategori:</label>
                        <select class="form-select" name="kategori_id">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k): ?>
                                <option value="<?= $k->id_kategori ?>" <?= set_select('kategori_id', $k->id_kategori, $produk->kategori_id == $k->id_kategori) ?>>
                                    <?= $k->nama_kategori ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori_id', '<div class="text-danger">', '</div>'); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="status_id">Status:</label>
                        <select class="form-select" name="status_id">
                            <option value="">Pilih Status</option>
                            <?php foreach ($status as $s): ?>
                                <option value="<?= $s->id_status ?>" <?= set_select('status_id', $s->id_status, $produk->status_id == $s->id_status) ?>>
                                    <?= $s->nama_status ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('status_id', '<div class="text-danger">', '</div>'); ?>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary mb-3 mt-3" href="<?= site_url('produk'); ?>">Kembali</a>
                    <button class="btn btn-primary mb-3 mt-3" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</html>
