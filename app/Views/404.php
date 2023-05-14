<?= $this->extend('layouts/main') ?>

<?= $this->section('content'); ?>
	<div id="error">
      <div class="error-page container">
        <div class="col-md-8 col-12 offset-md-2">
          <div class="text-center">
            <h1 class="error-title">Status 404</h1>
            <p class="fs-5 text-gray-600">
              Halaman yang anda tuju tidak ditemukan.
            </p>
            <a href="/" class="btn btn-lg btn-outline-primary mb-3"
              >Go Home</a
            >
            <img
              class="img-error"
              src="assets/images/samples/error-404.svg"
              alt="Not Found"
            />
            
          </div>
        </div>
      </div>
    </div>

<?= $this->endSection(); ?>

