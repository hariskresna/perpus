




    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <!--<p>Alexander Pierce</p>-->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo base_url('index.php/admin'); ?>">
            <i class="fa fa-dashboard"></i> <span>INFO PERPUSTAKAAN</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('index.php/admin/buku'); ?>">
            <i class="fa fa-files-o"></i>
            <span>DAFTAR BUKU</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('index.php/admin/tambahbuku'); ?>">
            <i class="fa fa-files-o"></i>
            <span>TAMBAH BUKU</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->