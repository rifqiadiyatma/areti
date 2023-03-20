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