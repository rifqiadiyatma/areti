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
    <!-- initTheme -->
    <script src="<?= base_url('assets/js/theme.js') ?>"></script>
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
    <!-- Nav Sidebar -->
    <nav class="sidebar offcanvas-md offcanvas-start" id="style-1" data-bs-scroll="true" data-bs-backdrop="false">
      <div class="d-flex justify-content-end m-3 d-block d-md-none">
        <button aria-label="Close" data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4">
          <i class="fas fa-close"></i>
        </button>
      </div>
      <div class="d-flex justify-content-center mt-md-5 mb-5">
        <h2 class="text-primary">ARETI</h2>
      </div>
      <div class="pt-2 d-flex flex-column gap-5 mx-2">
        <div class="menu p-0">
          <p>Menu</p>
          <a href="<?= base_url('dashboard') ?>" class="item-menu <?= $page == 'dashboard' ? 'active' : '' ?>">
            <i class="icon fa-solid fa-house"></i> Dashboard </a>
          <a href="<?= base_url('landingpage') ?>" class="item-menu">
            <i class="icon fa-solid fa-gauge"></i> Landing Page </a>
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'layout') ? 'active arrow-down' : '' ?>">
            <i class="icon fas fa-columns"></i> Layout </a>
            <div class="child <?= isset($parent) && ($parent == 'layout') ? 'open' : '' ?>">
              <a href="<?= base_url('layout/blankpage') ?>" class="item-menu <?= $page == 'blankpage' ? 'active' : '' ?>"> Blank Page </a>
              <a href="<?= base_url('layout/topnav') ?>" class="item-menu <?= $page == 'topnav' ? 'active' : '' ?>"> Top Nav Page </a>
            </div>
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'component') ? 'active arrow-down' : '' ?>">
            <i class="icon fa-solid fa-layer-group"></i> Component </a>
            <div class="child <?= isset($parent) && ($parent == 'component') ? 'open' : '' ?>">
              <a href="<?= base_url('component/accordion') ?>" class="item-menu <?= $page == 'accordion' ? 'active' : '' ?>"> Accordion </a>
              <a href="<?= base_url('component/alerts') ?>" class="item-menu <?= $page == 'alerts' ? 'active' : '' ?>"> Alerts </a>
              <a href="<?= base_url('component/badge') ?>" class="item-menu <?= $page == 'badge' ? 'active' : '' ?>"> Badge </a>
              <a href="<?= base_url('component/buttons') ?>" class="item-menu <?= $page == 'buttons' ? 'active' : '' ?>"> Buttons </a>
              <a href="<?= base_url('component/card') ?>" class="item-menu <?= $page == 'card' ? 'active' : '' ?>"> Card </a>
              <a href="<?= base_url('component/modal') ?>" class="item-menu <?= $page == 'modal' ? 'active' : '' ?>"> Modal </a>
              <a href="<?= base_url('component/toast') ?>" class="item-menu <?= $page == 'toast' ? 'active' : '' ?>"> Toast </a>
              <a href="<?= base_url('component/tooltips') ?>" class="item-menu <?= $page == 'tooltips' ? 'active' : '' ?>"> Tooltips </a>
            </div>
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'table') ? 'active arrow-down' : '' ?>">
            <i class="icon fas fa-table"></i> Table </a>
            <div class="child <?= isset($parent) && ($parent == 'table') ? 'open' : '' ?>">
              <a href="<?= base_url('table/basictable') ?>" class="item-menu <?= $page == 'basictable' ? 'active' : '' ?>"> Basic Table </a>
              <a href="<?= base_url('table/datatables') ?>" class="item-menu <?= $page == 'datatables' ? 'active' : '' ?>"> Datatables </a>
            </div>
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'icon') ? 'active arrow-down' : '' ?>">
            <i class="icon fas fa-icons"></i> Icon </a>
            <div class="child <?= isset($parent) && ($parent == 'icon') ? 'open' : '' ?>">
              <a href="<?= base_url('icon/fa') ?>" class="item-menu <?= $page == 'fontawesome' ? 'active' : '' ?>"> Font Awesome </a>
              <a href="<?= base_url('icon/bi') ?>" class="item-menu <?= $page == 'bootstrapicon' ? 'active' : '' ?>"> Bootstrap Icons </a>
            </div>    
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'pages') ? 'active arrow-down' : '' ?>">
            <i class="icon fa-solid fa-cubes"></i> Pages </a>
            <div class="child <?= isset($parent) && ($parent == 'pages') ? 'open' : '' ?>">
              <a href="<?= base_url('pages/myprofile') ?>" class="item-menu <?= $page == 'myprofile' ? 'active' : '' ?>"> My Profile </a>
              <a href="<?= base_url('pages/addproduct') ?>" class="item-menu <?= $page == 'addproduct' ? 'active' : '' ?>"> Add Product </a>
              <a href="<?= base_url('pages/product') ?>" class="item-menu <?= $page == 'product' ? 'active' : '' ?>"> Product </a>
              <a href="<?= base_url('pages/market') ?>" class="item-menu <?= $page == 'market' ? 'active' : '' ?>"> Market </a>
              <a href="<?= base_url('pages/changepassword') ?>" class="item-menu <?= $page == 'changepassword' ? 'active' : '' ?>"> Change Password </a>
              <a href="<?= base_url('pages/settings') ?>" class="item-menu <?= $page == 'settings' ? 'active' : '' ?>"> Settings </a>
            </div>
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'extended') ? 'active arrow-down' : '' ?>">
            <i class="icon fa-solid fa-book"></i> Extended </a>
            <div class="child <?= isset($parent) && ($parent == 'extended') ? 'open' : '' ?>">
              <a href="<?= base_url('extended/select2') ?>" class="item-menu <?= $page == 'select2' ? 'active' : '' ?>"> Select2 </a>
              <a href="<?= base_url('extended/sweetalert') ?>" class="item-menu <?= $page == 'sweetalert' ? 'active' : '' ?>"> Sweet Alert </a>
              <a href="<?= base_url('extended/ckeditor') ?>" class="item-menu <?= $page == 'ckeditor' ? 'active' : '' ?>"> CKEditor </a>
              <a href="<?= base_url('extended/tinymce') ?>" class="item-menu <?= $page == 'tinymce' ? 'active' : '' ?>"> TinyMCE </a>
            </div>
          <a href="#" class="item-menu has-tree">
            <i class="icon fa-solid fa-lock"></i> Auth </a>
            <div class="child">
              <a href="<?= base_url('auth/login') ?>" class="item-menu"> Login </a>
              <a href="<?= base_url('auth/register') ?>" class="item-menu"> Register </a>
              <a href="<?= base_url('auth/forgotpassword') ?>" class="item-menu"> Forgot Password </a>
              <a href="<?= base_url('auth/resetpassword') ?>" class="item-menu"> Reset Password </a>
            </div>
          <a href="#" class="item-menu has-tree">
            <i class="icon fa-solid fa-face-frown"></i> Error </a>
            <div class="child">
              <a href="<?= base_url('errorpage/page403') ?>" class="item-menu"> 403 </a>
              <a href="<?= base_url('errorpage/page404') ?>" class="item-menu"> 404 </a>
              <a href="<?= base_url('errorpage/page500') ?>" class="item-menu"> 500 </a>
              <a href="<?= base_url('errorpage/page503') ?>" class="item-menu"> 503 </a>
            </div>
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'form') ? 'active arrow-down' : '' ?>">
            <i class="icon fa-solid fa-file"></i> Form </a>
            <div class="child <?= isset($parent) && ($parent == 'form') ? 'open' : '' ?>">
              <a href="<?= base_url('form') ?>" class="item-menu <?= $page == 'form' ? 'active' : '' ?>"> Form </a>
              <a href="<?= base_url('form/formlayout') ?>" class="item-menu <?= $page == 'formlayout' ? 'active' : '' ?>"> Form Layout </a>
              <a href="<?= base_url('form/validation') ?>" class="item-menu <?= $page == 'formvalidation' ? 'active' : '' ?>"> Form Validation </a>
            </div>    
        </div>
        <div class="menu">
          <p>Settings</p>
          <a href="#" class="item-menu">
            <i class="icon fas fa-sign-out"></i> Logout </a>
        </div>
      </div>
    </nav>
    <!-- Main Content -->
    <main class="content">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="cta_sidebar">
            <button class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block" aria-label="Hamburger Button">
              <i class="fa-solid fa-bars"></i>
            </button>
            <button data-bs-toggle="offcanvas" data-bs-target=".sidebar" aria-controls="sidebar" aria-label="Hamburger Button" class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none">
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>
          <div class="d-flex align-items-center justify-content-end gap-4">
            <button class="btn btn-outline-secondary rounded-circle" id="dark-mode"><i class="fa fa-moon"></i></button>
            <div class="btn-group dropstart">
              <img src="<?= base_url('assets/images/avatar.jpg') ?>" alt="Photo Profile" class="avatar dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" />
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="<?= base_url('pages/myprofile') ?>">Akun Saya</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= base_url('pages/changepassword') ?>">Ganti Password</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="<?= base_url('auth/login') ?>">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="d-flex justify-content-between">
        <section class="title-content p-3">
          <h3><?= $title ?></h3>
          <p>Welcome to ARETI</p>
        </section>
        <nav aria-label="breadcrumb" class="align-self-center d-none d-md-block">
          <ol class="breadcrumb">
            <?php for($i = 1; $i <= $this->uri->total_segments(); $i++) : 
              if ($i == $this->uri->total_segments()) : ?>
                <li class="breadcrumb-item text-capitalize">
                  <?= $this->uri->segment($i) ?>
                </li>
              <?php else : ?> 
                <li class="breadcrumb-item text-capitalize active">
                  <?= '<a href='. base_url($this->uri->segment($i)) .'>'.$this->uri->segment($i).'</a>' ?>
                </li>
            <?php endif; endfor; ?>
          </ol>
        </nav>
      </div>
      <section class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto pe-0">
                    <div class="icon icon-box text-light bg-success rounded-4">
                      <i class="fas fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col px-0">
                    <h5 class="mb-0">Surat Masuk</h5>
                    <span class="h3 text-muted mb-0">999</span>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2">
                    <i class="fa fa-arrow-up"></i> 3.48% </span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto pe-0">
                    <div class="icon icon-box text-light bg-warning rounded-4">
                      <i class="fas fa-shop"></i>
                    </div>
                  </div>
                  <div class="col px-0">
                    <h5 class="mb-0">Toko</h5>
                    <span class="h3 text-muted mb-0">999</span>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-danger mr-2">
                    <i class="fa fa-arrow-down"></i> 3.48% </span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto pe-0">
                    <div class="icon icon-box text-light bg-primary rounded-4">
                      <i class="fas fa-user"></i>
                    </div>
                  </div>
                  <div class="col px-0">
                    <h5 class="mb-0">User</h5>
                    <span class="h3 text-muted mb-0">999</span>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2">
                    <i class="fa fa-arrow-up"></i> 3.48% </span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-auto pe-0">
                    <div class="icon icon-box text-light bg-danger rounded-4">
                      <i class="fas fa-trash"></i>
                    </div>
                  </div>
                  <div class="col px-0">
                    <h5 class="mb-0">Sampah</h5>
                    <span class="h3 text-muted mb-0">999</span>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-danger mr-2">
                    <i class="fa fa-arrow-down"></i> 3.48% </span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 col-lg-8 mb-3">
            <div class="card p-3">
              <div class="card-header">
                <h4>Line Chart</h4>
              </div>
              <canvas id="myChart"></canvas>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-3">
            <div class="card p-3">
              <div class="card-header">
                <h4>Doughnut Chart</h4>
              </div>
              <canvas id="myChart2"></canvas>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Jquery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- ChartJs -->
    <script src="<?= base_url('assets/modules/chartjs/chartjs.min.js') ?>"></script>
    <!-- App JS -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script>
      const ctx = document.getElementById('myChart');
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'Mei', 'June', 'July', ],
          datasets: [{
            label: 'Keuntungan',
            data: [65, 59, 80, 81, 56, 55, 40],
            fill: false,
            borderColor: 'rgb(13, 110, 253)',
            tension: 0.1,
          }, ],
        },
      });
    </script>
    <script>
      const ctx2 = document.getElementById('myChart2');
      new Chart(ctx2, {
        type: 'doughnut',
        data: {
          labels: ['Red', 'Blue', 'Yellow'],
          datasets: [{
            label: 'Penjualan',
            data: [300, 50, 100],
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
          }, ],
        },
      });
    </script>
  </body>
</html>