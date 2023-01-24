<?= $this->extend('layout/template'); ?>

<?= $this->section('lay-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Home</h1>
            <p style="font-size:28px; background-color:powderblue;">
                Pada project ini menerapkan konsep MVC, terdapat 3 komponen menu yang terdiri dari : <br> <br>
                1. Contact yang berisikan data Dummy pengguna yang di implementasikan pada databse menggunakan sistem <b> Migration, Seeds, dan Faker</b> yang terdapat pada framework ci4 serta penambahan Searching dan Pigination.
                <br> <br>
                2. Pesanan yang bersikan sistemasi CRUD pada data pesanan yang terdiri dari <b> Insert, Edit, dan Delete </b> serta penambahan uploud file dan validation pada penginputan data.
                <br> <br>
                3. Galery yang merupakan layout bootsrap penampil view
            </p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>