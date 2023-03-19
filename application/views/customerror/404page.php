<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Areti Template | <?= $title ?></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
  <!-- External CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" type="text/css" />
</head>
<body>
  <div class="error-page">
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="row text-center">
        <div class="col">
          <h1 class="fw-bold text-muted mb-0">404</h1>
          <h4 class="text-muted">Page not found</h4>
          <a href="<?= base_url() ?>" class="btn btn-primary shadow-lg rounded-pill mt-4 px-5" role="button">Back to home</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>