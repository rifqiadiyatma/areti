<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
  <!-- External CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" type="text/css" />
  <!-- Fontawesome -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/fontawesome/css/all.min.css') ?>">
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand text-primary fw-bold" href="#">
        ARETI
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item align-self-center me-md-4">
            <a class="nav-link text-primary active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item align-self-center me-md-4">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item align-self-center me-md-4">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item align-self-center me-md-5">
            <a class="nav-link" href="#">About</a>
          </li>
          <a href="<?= base_url('auth/login') ?>" class="btn btn-primary ms-md-5 px-3">Sign in</a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col align-self-center">
        <h1 class="mb-4">The Design Thinking Superpowers</h1>
        <p class="mb-4">Tools, tutorials, design and innovation experts, all in one place! the most intuitive way to imagine your next user experience</p>
        <a href="<?= base_url() ?>" class="btn btn-primary px-3 py-2">Get Started</a>
      </div>
      <div class="col d-none d-md-block">
        <img width="650px" src="https://img.freepik.com/premium-vector/business-man-working-computer-desk-office_165488-1603.jpg" alt="">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col text-center fw-bold">
        <h4>Our Features</h4>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
      <div class="col">
        <div class="card shadow h-100">
          <img src="<?= base_url('assets/images/dummy-product1.jpg') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow h-100">
          <img src="<?= base_url('assets/images/dummy-product1.jpg') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow h-100">
          <img src="<?= base_url('assets/images/dummy-product1.jpg') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <!-- Jquery -->
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <!-- Bootstrap JS -->
  <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>