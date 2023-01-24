<?= $this->extend('layout/template'); ?>

<?= $this->section('lay-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Contact</h1>
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword contact" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div>
            <?php if (session()->getFlashdata('delete')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('delete'); ?> <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
            <?php endif; ?>
            <table border=" 2" style="width:100%" class="table table-secondary table-striped">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php $i = 1 + (9 * ($currentPage - 1)); ?>
                <?php foreach ($contact as $c) : ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $c['nama']; ?></td>
                        <td><?= $c['phone']; ?></td>
                        <td><?= $c['alamat']; ?></td>
                        <td>
                            <form action="/delete/<?= $c['id']; ?>" method="get" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?');">Delete</button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>

            <?= $pager->links('contact', 'contact_pagin'); ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>