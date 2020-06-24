<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("admin/_partials/head.php") ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" >

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="height: 100%;">

          <!-- Page Heading -->
          <?php if($this->session->userdata('nama')=='admin'){ ?> 
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
            
          <?php }else{ ?>
            <div class="d-sm-flex justify-content-center mb-4">
              <h1 class="h3 mb-0 text-gray-800">Kasir Restoran</h1>
            </div>

            <div class="row justify-content-center" style="text-align: center;">

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2 kartu">
                  <div class="card-body">
                    <div class="row no-gutters justify-content-center menu-item">
                      <a href="">
                        <i class="fa fa-shopping-bag text-primary"></i>
                        <p class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pembayaran</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 kartu">
                  <div class="card-body">
                    <div class="row no-gutters justify-content-center menu-item">
                      <a href="">
                        <i class="fas fa-chart-bar text-success"></i>
                        <p class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Harian</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          <?php } ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Javascript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>