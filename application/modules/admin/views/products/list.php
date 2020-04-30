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
					<div class="card-header">
						<a href="<?php echo base_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead class="thead-light">
									<tr>
										<th class="text-center">Name</th>
										<th class="text-center">Price</th>
										<th class="text-center">Photo</th>
										<th class="text-center">Description</th>
										<th class="text-center">Category</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data->result() as $product): ?>
									<tr>
										<td><?php echo $product->name ?></td>
										<td><?php echo $product->price ?></td>
										<td><img src="<?php echo base_url('gambar/'.$product->image) ?>" width="64" /></td>
										<td class="small"><?php echo substr($product->description, 0, 120) ?>...</td>
										<td><?php echo $product->category ?></td>
										<td class="text-center">
											<a href="<?php echo base_url('admin/products/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo base_url('admin/products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
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