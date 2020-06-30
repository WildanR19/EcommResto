<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("admin/_partials/head.php") ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">

            <h3 class="text-center mb-3">Pesanan pada Order ID <?=$order->order_id?></h1>
            <div class="row justify-content-center mb-5">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $total = 0;
                                    foreach($detail as $row) :
                                    $subtotal = $row->qty * $row->price;
                                    $total += $subtotal;
                                ?>
                                <tr>
                                    <td><?=$row->product_id?></td>
                                    <td><?=$row->product_name?></td>
                                    <td><?=$row->qty?></td>
                                    <td><?=$row->price?></td>
                                    <td><?=$subtotal?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" align="right">Total</td>
                                    <td><?=$total?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

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
  <script>
      function bayarConfirm(url){
			$('#btn-bayar').attr('href', url);
			$('#bayarModal').modal();
        }
  </script>

</body>

</html>