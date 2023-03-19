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
      <section class="title-content p-3">
        <h3><?= $title ?></h3>
        <p>Check documentation <a href="https://getbootstrap.com/docs/5.3/forms/layout/" target="_blank">form layout</a></p>
      </section>
      <section class="container-fluid">
        <!-- Form Grid -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5>Form Grid</h5>
              </div>
              <div class="card-body">
                <form class="row g-3">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Horizontal Form -->
        <div class="row mt-3">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5>Horizontal Form</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          First radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Second radio
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                          Third disabled radio
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                          Example checkbox
                        </label>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Inline Form -->
        <div class="row mt-3">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5>Inline Form</h5>
              </div>
              <div class="card-body">
                <form class="row row-cols-lg-auto g-3 align-items-center">
                  <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-text">@</div>
                      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                    </div>
                  </div>

                  <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                    <select class="form-select" id="inlineFormSelectPref">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                      <label class="form-check-label" for="inlineFormCheck">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Jquery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- App JS -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
  </body>
</html>