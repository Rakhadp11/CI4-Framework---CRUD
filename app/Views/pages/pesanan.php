<?= $this->extend('layout/template'); ?>

<?= $this->section('lay-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Pesanan</h1>
            <?php if (session()->getFlashdata('berhasil')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('berhasil'); ?> <i class="fa-sharp fa-solid fa-circle-check"></i>
                </div>
            <?php elseif (session()->getFlashdata('gagal')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('gagal'); ?> <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
            <?php endif; ?>
            <a href="/create" class="btn btn-primary mb-2"><i class="fa-solid fa-pen"></i> Tambah pesanan</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pesanan as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/images/<?= $p['image']; ?>" alt="" width="120"></td>
                            <td><?= $p['produk']; ?></td>
                            <td><?= $p['harga']; ?></td>
                            <td>
                                <a href="/pesanan/<?= $p['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>