<?= $this->extend('layout/template'); ?>

<?= $this->section('lay-content'); ?>



<div class="container">
    <div class="row">
        <div class="col">
            <h1>Galery</h1>

            <section class="gallery min-vh-100">
                <div class="container-lg">
                    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                        <div class="col">
                            <img src="images/g-9.jpg" class="gallery-item" alt="gallery">
                        </div>
                        <div class="col">
                            <img src="images/g-2.jpg" class="gallery-item" alt="gallery">
                        </div>
                        <div class="col">
                            <img src="images/g-3.jpg" class="gallery-item" alt="gallery">
                        </div>
                        <div class="col">
                            <img src="images/g-4.jpg" class="gallery-item" alt="gallery">
                        </div>
                        <div class="col">
                            <img src="images/g-5.jpg" class="gallery-item" alt="gallery">
                        </div>
                        <div class="col">
                            <img src="images/g-6.jpg" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="../images/g-1.jpg" class="modal-img" alt="modal img">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<?= $this->endSection(); ?>