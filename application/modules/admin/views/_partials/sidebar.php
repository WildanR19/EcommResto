<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fab fa-shopify"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-Commerce</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if($this->uri->segment(2)=="dashboard"){echo "active";}?>">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item -->
      <li class="nav-item <?php if($this->uri->segment(2)=="order"){echo "active";}?>">
        <a class="nav-link" href="<?php echo base_url('admin/#'); ?>">
        <i class="fas fa-fw fa-user"></i>
          <span>Order</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Product Management
      </div>

      <li class="nav-item <?php if($this->uri->segment(2)=="products"){echo "active";}?>">
        <a class="nav-link" href="<?php echo base_url('admin/products'); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Products</span></a>
      </li>

      <li class="nav-item <?php if($this->uri->segment(2)=="log"){echo "active";}?>">
        <a class="nav-link" href="<?php echo base_url('admin/log'); ?>">
          <i class="fas fa-fw fa-history"></i>
          <span>Activity Log</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>