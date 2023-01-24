<?= $this->extend('layout/template'); ?>

<?= $this->section('lay-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Tambah Pesanan</h2>
            <?php if (session()->getFlashdata('berhasil')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('berhasil'); ?> <i class="fa-sharp fa-solid fa-circle-check"></i>
                </div>
            <?php elseif (session()->getFlashdata('gagal')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('gagal'); ?> <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
            <?php endif; ?>

            <form action="/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="produk" class="form-label">Nama Produk</label>
                    <input type="text" id="produk" name="produk" class="form-control <?= ($validation->hasError('produk')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('produk'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('produk'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>">
                </div>
                <div class="mb-3">
                    <label for="image" class="custom-file-label">Image</label>
                    <div class="col-sm-3">
                        <img src="/images/default.png" class="img-thumbnail img-preview">
                    </div>
                    <input type="file" id="image" name="image" class="form-control  mt-2 <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" aria-label=" file example" required autofocus value="<?= old('image'); ?>" onchange="previewImage()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('image'); ?>
                    </div>
                    <br><br>

                    <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>