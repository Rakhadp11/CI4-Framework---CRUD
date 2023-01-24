<?= $this->extend('layout/template'); ?>

<?= $this->section('lay-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <h1>Detail Pesanan</h1>
                    <div class="card">
                        <img src="/images/<?= $pesanan['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pesanan['produk']; ?></h5>
                            <h5 class="card-title"> <b>Rp. </b><?= $pesanan['harga']; ?></h5>
                            <br>
                            <a href="/edit/<?= $pesanan['slug']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/<?= $pesanan['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?');">Delete</button>
                            </form>
                            <br> <br>
                            <a href="/pesanan">Kembali ke daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>