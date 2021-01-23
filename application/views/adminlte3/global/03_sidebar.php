  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link animated bounceInDown delay-1s" style="user-select: text;">
    <img src="<?php print base_url('adminlte3/'); ?>dist/img/favicon.png" alt="Admin Panel" class="brand-image img-circle">
    <span class="brand-text font-weight-bold">Admin SiPPDB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php print base_url('adminlte3/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama_user'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header text-info"><b>MENU UTAMA</b></li>

          <!-- mryoo data master -->
          <li class="nav-item">
            <a href="<?php print base_url('index.php/superadmin/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Beranda</p>
            </a>
          </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-school nav-icon text-info"></i>
                  <p>Master Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('index.php/superadmin/jenjang'); ?>" class="nav-link">
                  <i class="fas fa-user-graduate nav-icon text-info"></i>
                  <p>Master Jenjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('index.php/superadmin/jurusan'); ?>" class="nav-link">
                  <i class="fas fa-award nav-icon text-info"></i>
                  <p>Master Gelombang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="fas fa-file-alt nav-icon text-info"></i>
                  <p>Master Berkas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="fas fa-pen-alt nav-icon text-info"></i>
                  <p>Master Jenis Daftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon text-info"></i>
                  <p>Master Biaya</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- mryoo akhir data master -->
          
          <!-- mryoo data pendaftar -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pendaftar
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-warning right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/tables/simple.html" class="nav-link">
                  <i class="fas fa-restroom nav-icon text-info"></i>
                  <p>Semua Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/tables/data.html" class="nav-link">
                  <i class="fas fa-user-check nav-icon text-green"></i>
                  <p>Data Diterima</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/tables/jsgrid.html" class="nav-link">
                  <i class="fas fa-user-times nav-icon text-danger"></i>
                  <p>Ditolak / Cadangan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- mryoo akhir data pendaftar -->

          <!-- mryoo Info & CS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Informasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fas fa-folder-open nav-icon text-info"></i>
                  <p>Info Persyaratan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/mailbox/compose.html" class="nav-link">
                  <i class="fas fa-money-bill-wave nav-icon text-info"></i>
                  <p>Info Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('adminlte3/'); ?>pages/mailbox/read-mail.html" class="nav-link">
                  <i class="fas fa-headset nav-icon text-info"></i>
                  <p>CS Panitia</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon far fa-handshake "></i>
              <p>Pengumuman</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-bullhorn "></i>
              <p>Pembayaran</p>
            </a>
          </li>
          <!-- mryoo akhir Info & CS -->

          <!-- mryoo setting -->
          <li class ="nav-header text-info "><b>SETTING</b></li>
          <li class="nav-item">
            <a href="<?php print base_url('index.php/superadmin/user'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user-secret"></i>
              <p class="text">Manajemen User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php print base_url('index.php/superadmin/setting'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>Setting Aplikasi</p>
            </a>
          </li>
        </ul>
         <!-- mryoo akhir setting -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>