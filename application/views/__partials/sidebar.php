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
            <a href="#" class="item-menu"> Accordion </a>
            <a href="#" class="item-menu"> Alerts </a>
            <a href="#" class="item-menu"> Badge </a>
            <a href="#" class="item-menu"> Buttons </a>
            <a href="#" class="item-menu"> Card </a>
            <a href="#" class="item-menu"> Modal </a>
            <a href="#" class="item-menu"> Tooltips </a>
          </div>
          <a href="#" class="item-menu has-tree">
            <i class="icon fas fa-table"></i> Table </a>
          <div class="child">
            <a href="
					<?= base_url('table/basictable') ?>" class="item-menu">
              <i class="icon fa-solid fa-layer-group"></i> Basic Table </a>
            <a href="
					<?= base_url('table/datatables') ?>" class="item-menu">
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