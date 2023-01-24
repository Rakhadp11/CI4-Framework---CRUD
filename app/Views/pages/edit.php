<?= $this->extend('layout/template'); ?>

<?= $this->section('lay-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Edit Pesanan</h2>
            <?php if (session()->getFlashdata('berhasil')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('berhasil'); ?> <i class="fa-sharp fa-solid fa-circle-check"></i>
                </div>
            <?php elseif (session()->getFlashdata('gagal')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('gagal'); ?> <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
            <?php endif; ?>

            <form action="/update/<?= $pesanan['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="imageLama" value="<?= $pesanan['image']; ?>">
                <input type="hidden" name="slug" value="<?= $pesanan['slug']; ?>">
                <div class="mb-3">
                    <label for="produk" class="form-label">Nama Produk</label>
                    <input type="text" id="produk" name="produk" class="form-control" aria-describedby="emailHelp" autofocus value="<?= (old('produk')) ? old('produk') : $pesanan['produk'] ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $pesanan['harga'] ?>">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <div class="col-sm-3">
                        <img src="/images/<?= $pesanan['image']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <input type="file" id="image" name="image" class="form-control  mt-2 <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>"" aria-label=" file example" value="<?= old('image'); ?>" onchange="previewImage()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('image'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>