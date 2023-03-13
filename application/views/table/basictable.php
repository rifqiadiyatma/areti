<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="ITERA Admin Dashboard Page" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Template ITERA | <?= $title ?></title>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- External CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" type="text/css" />
    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/32f82e1dca.js" cross="anonymous"></script>
  </head>
  <body data-bs-theme="light">
    <!-- Bottom Navbar -->
    <nav class="navbar navbar-dark bg-secondary  navbar-expand fixed-bottom p-0 d-md-none d-lg-none d-xl-none">
      <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
          <a href="#" class="nav-link text-center">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>
            <span class="small d-block">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-center">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
            </svg>
            <span class="small d-block">Search</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-center">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
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
          <a href="<?= base_url('dashboard') ?>" class="item-menu active">
            <i class="icon fa-solid fa-house"></i> Dashboard </a>
          <a href="#" class="item-menu">
            <i class="icon fas fa-columns"></i> Layout </a>
          <a href="#" class="item-menu has-tree">
            <i class="icon fa-solid fa-layer-group"></i> Component </a>
          <div class="child">
            <a href="#" class="item-menu">
              <i class="icon fa-solid fa-layer-group"></i> Card </a>
            <a href="#" class="item-menu">
              <i class="icon fa-solid fa-layer-group"></i> Button </a>
          </div>
          <a href="#" class="item-menu has-tree">
            <i class="icon fas fa-table"></i> Table </a>
          <div class="child">
            <a href="<?= base_url('table/basictable') ?>" class="item-menu">
              <i class="icon fa-solid fa-layer-group"></i> Basic Table </a>
            <a href="<?= base_url('table/datatables') ?>" class="item-menu">
              <i class="icon fa-solid fa-layer-group"></i> Datatables </a>
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
              <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Photo Profile" class="avatar dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" />
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
        <p>Lorem Ipsum</p>
      </section>
      <section class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-hover caption-top">
                  <caption class="fw-bold">Table Basic with Hover</caption>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>Lobster</td>
                      <td>@twitter</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Jokowi</td>
                      <td>Widodo</td>
                      <td>@jokowi</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Mas</td>
                      <td>Prabowo</td>
                      <td>@prabowo</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-hover table-striped caption-top">
                  <caption class="fw-bold">Table Stripped with Hover</caption>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>Lobster</td>
                      <td>@twitter</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Jokowi</td>
                      <td>Widodo</td>
                      <td>@jokowi</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Mas</td>
                      <td>Prabowo</td>
                      <td>@prabowo</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
        <div class="col-12">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered caption-top text-center">
                  <caption class="fw-bold">Table with action</caption>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Progress</th>
                      <th scope="col">Label</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-success w-100"></div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success">
                          100%
                        </span>
                      </td>
                      <td>
                        <div class="d-grid gap-1 d-flex justify-content-center">
                          <button class="btn btn-primary btn-sm" type="button">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                          <button class="btn btn-success btn-sm" type="button">
                            <i class="fa-solid fa-pen"></i>
                          </button>
                          <button class="btn btn-danger btn-sm" type="button">
                            <i class="fa-solid fa-trash"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar w-75"></div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary">
                          75%
                        </span>
                      </td>
                      <td>
                        <div class="d-grid gap-1 d-flex justify-content-center">
                          <button class="btn btn-primary btn-sm" type="button">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                          <button class="btn btn-success btn-sm" type="button">
                            <i class="fa-solid fa-pen"></i>
                          </button>
                          <button class="btn btn-danger btn-sm" type="button">
                            <i class="fa-solid fa-trash"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-warning w-50"></div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-warning text-white">
                          25%
                        </span>
                      </td>
                      <td>
                        <div class="d-grid gap-1 d-flex justify-content-center">
                          <button class="btn btn-primary btn-sm" type="button">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                          <button class="btn btn-success btn-sm" type="button">
                            <i class="fa-solid fa-pen"></i>
                          </button>
                          <button class="btn btn-danger btn-sm" type="button">
                            <i class="fa-solid fa-trash"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Jokowi</td>
                      <td>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar w-75"></div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary">
                          75%
                        </span>
                      </td>
                      <td>
                        <div class="d-grid gap-1 d-flex justify-content-center">
                          <button class="btn btn-primary btn-sm" type="button">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                          <button class="btn btn-success btn-sm" type="button">
                            <i class="fa-solid fa-pen"></i>
                          </button>
                          <button class="btn btn-danger btn-sm" type="button">
                            <i class="fa-solid fa-trash"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Prabowo</td>
                      <td>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-danger w-25"></div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger">
                          25%
                        </span>
                      </td>
                      <td>
                        <div class="d-grid gap-1 d-flex justify-content-center">
                          <button class="btn btn-primary btn-sm" type="button">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                          <button class="btn btn-success btn-sm" type="button">
                            <i class="fa-solid fa-pen"></i>
                          </button>
                          <button class="btn btn-danger btn-sm" type="button">
                            <i class="fa-solid fa-trash"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script>
      $(document).ready(function() {
        $('.sidebarCollapseDefault').on('click', function() {
          $('.sidebar').toggleClass('active');
          $('.content').toggleClass('active');
        });
      });
    </script>
  </body>
</html>