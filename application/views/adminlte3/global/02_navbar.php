  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="user-select: text;"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <div class="row">
    <div class="col-lg-6">
    <div id="jam" class="text-lg font-weight-bold text-dark" style="user-select: text;">1:44:33</div>
    </div>
    </div>
    </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
         
          <i class="fas fa-user-cog"></i>
            </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <span class="dropdown-item dropdown-header"><img src="<?php print base_url('adminlte3/'); ?>dist/img/user2-160x160.jpg" alt="User Avatar" class="img-size-60 mr-3 img-circle"></span>
      <span class="dropdown-item dropdown-header"><a href="#" class="d-block"><?php echo $this->session->userdata('nama_user'); ?></a></span>
             
          <div class="dropdown-divider"></div>
            <a href="<?php print base_url('index.php/superadmin/profile'); ?>" class="dropdown-item">
      <i class="fas fa-cog fa-spin"></i> Pengaturan
       <span class="float-right text-muted text-sm">Si-PPDB</span>
      </a>
            
          <div class="dropdown-divider"></div>
                  
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('welcome'); ?>" class="dropdown-item dropdown-footer"><i class="fas fa-power-off"></i> Keluar</a>
        </div>
    
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->