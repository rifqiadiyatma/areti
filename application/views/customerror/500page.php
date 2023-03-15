<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Areti Template | <?= $title ?></title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- External CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" type="text/css" />
</head>
<body>
  <div class="error-page">
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="row text-center">
        <div class="col">
          <h1 class="fw-bold text-muted mb-0">500</h1>
          <h4 class="text-muted">Internal server error, something went wrong</h4>
          <a href="<?= base_url() ?>" class="btn btn-primary shadow-lg rounded-pill mt-4 px-5" role="button">Back to home</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>