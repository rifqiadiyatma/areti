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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- External CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" type="text/css" />
    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/32f82e1dca.js" cross="anonymous"></script>
  </head>
  <body>
    <!-- Bottom Navbar -->
    <nav class="navbar bg-body-tertiary navbar-expand fixed-bottom p-0 d-md-none d-lg-none d-xl-none">
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
          <a href="#" class="item-menu">
            <i class="icon fas fa-columns"></i> Layout </a>
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
          <a href="#" class="item-menu has-tree <?= isset($parent) && ($parent == 'extended') ? 'active arrow-down' : '' ?>">
            <i class="icon fa-solid fa-book"></i> Extended </a>
            <div class="child <?= isset($parent) && ($parent == 'extended') ? 'open' : '' ?>">
              <a href="<?= base_url('extended/select2') ?>" class="item-menu <?= $page == 'select2' ? 'active' : '' ?>"> Select2 </a>
              <a href="<?= base_url('extended/sweetalert') ?>" class="item-menu <?= $page == 'sweetalert' ? 'active' : '' ?>"> Sweet Alert </a>
            </div>    
          <a href="<?= base_url('form') ?>" class="item-menu <?= $page == 'form' ? 'active' : '' ?>">
            <i class="icon fa-solid fa-file"></i> Form </a>
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
        <!-- Form Basic -->
        <div class="row">
          <div class="col-12 col-md-8 mb-3">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Form Basic</h4>
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
          </div>
          <!-- Form Sizing -->
          <div class="col-12 col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Form Sizing</h4>
                  <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                  <input class="form-control mb-3" type="text" placeholder="Default input" aria-label="default input example">
                  <input class="form-control form-control-sm mb-3" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                </div>
            </div>
          </div>
        </div>

        <!-- Input Group -->
        <div class="row mt-4">
          <div class="col-12 col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-3">Input Group</h4>
                <form>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                  </div>

                  <div class="mb-3">
                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="form-text">Example help text goes outside the input group.</div>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                  </div>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                  </div>

                  <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Floating Form -->
          <div class="col-12 col-md-6 mb-3">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Floating Form</h4>
                <form>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com">
                    <label for="floatingInputDisabled">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"></textarea>
                    <label for="floatingTextareaDisabled">Comments</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px"></textarea>
                    <label for="floatingTextarea2Disabled">Comments</label>
                  </div>
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <label for="floatingSelectDisabled">Works with selects</label>
                  </div>
                </form>
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
  </body>
</html>