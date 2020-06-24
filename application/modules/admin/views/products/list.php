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

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header row">
						<div class="col">
							<a href="<?php echo base_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
						</div>
						<div class="col-3">
							<div class="input-group justify-content-end">
								<input type="text" class="form-control bg-white border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" id="keyword">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button" id="btn-search">
									<i class="fas fa-search fa-sm"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<?php $this->load->view('view', array('product'=>$data)); // Load file view.php dan kirim data siswanya ?>
						<div class="row">
							<div class="col">
								<?php echo $pagination; ?>
							</div>
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
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>