<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="ITERA Admin Dashboard Page" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Template ITERA | <?= $title ?></title>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <!-- External CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" type="text/css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/modules/fontawesome/css/all.min.css') ?>">
    <style>
      body {
        /* min-height: 100vh; */
        /* padding-top: 4rem; */
      }

.sticky-top {
    padding-top: 66px;
}
    </style>
  </head>
  <body>
    <!-- Bottom Navbar -->
    <nav class="navbar bg-body-tertiary navbar-expand border-top fixed-bottom p-0 d-md-none d-lg-none d-xl-none">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="#" class="nav-link text-center">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    <span class="small d-block">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-center">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                        <path fill-rule="evenodd"
                            d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    </svg>
                    <span class="small d-block">Search</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-center">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg>
                    <span class="small d-block">Profile</span>
                </a>
            </li>
        </ul>
    </nav>

      <nav class="navbar navbar-expand-lg mb-0 fixed-top bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand fw-bold text-primary" href="#">
            ARETI
          </a>
          <div class="d-flex align-items-center justify-content-end gap-4">
            <button class="btn btn-outline-secondary rounded-circle" id="dark-mode"><i class="fa fa-moon"></i></button>
            <div class="btn-group dropstart">
              <img src="<?= base_url('assets/images/avatar.jpg') ?>" alt="Photo Profile" class="avatar dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" />
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">Akun Saya</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Ganti Password</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      
      <div class="sticky-top">
      <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pages</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      </div>

      <main class="container-fluid bg-topnav">
        <div class="container">
          <div class="row">
          <div class="col-12">
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
            <h1>TOP NAVIGATION</h1>
          </div>
          </div>
        </div>
      </main>
    <!-- Jquery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- App JS -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
  </body>
</html>