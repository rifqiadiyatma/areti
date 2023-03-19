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
  <div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-body-tertiary" >
    <div class="row text-center">
      <div class="col p-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h1 class="fs-4 fw-bold text-primary">Reset Password</h1>
          </div>
          <div class="card-body">
            <form>
              <div class="mb-3 text-start">
                <label for="newpassword" class="form-label text-muted">Password Baru</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-lock text-primary"></i></div>
                  <input type="newpassword" class="form-control" id="newpassword" placeholder="Masukkan Password Baru">
                </div>
              </div>
              <div class="mb-4 text-start">
                <label for="repassword" class="form-label text-muted">Konfirmasi Password</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-lock text-primary"></i></div>
                  <input type="repassword" class="form-control" id="repassword" placeholder="Masukkan Konfirmasi Password Baru">
                </div>
              </div>
              <div class="d-grid">
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <p class="mt-3">Kembali ke halaman <a href="<?= base_url('auth/login') ?>" class="text-primary">login</a></p>
    </div>
  </div>

  <!-- Jquery -->
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <!-- Bootstrap JS -->
  <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>