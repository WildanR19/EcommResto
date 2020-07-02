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

			<div class="loading align-middle" style="display: none; z-index: 999; position:fixed; left:50%;">
                <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>"/></div>
            </div>

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header row">
						<div class="col">
							<a href="<?php echo base_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
						</div>
						<div class="col-4">
							<div class="input-group justify-content-end">
								<div class="d-none d-sm-inline-block">
									<input type="text" class="form-control bg-white border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" id="keywords" onkeyup="searchFilter();" />
								</div>
								
								<li class="nav-item dropdown no-arrow d-sm-none">
									<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-search fa-fw"></i>
									</a>
									<!-- Dropdown - Messages -->
									<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
										<form class="form-inline mr-auto w-100 navbar-search">
										<div class="input-group">
											<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" id="keywords" onkeyup="searchFilter();">
											<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
											</div>
										</div>
										</form>
									</div>
								</li>
								<select id="sortBy" onchange="searchFilter();" class="custom-select">
									<option value="">Sort by ID</option>
									<option value="asc">Sort by Name</option>
									<option value="desc">Descending</option>
								</select>
							</div>
						</div>
					</div>
					<div class="card-body" id="dataList">
						<div class="table-responsive">
							<table class="table table-hover table-bordered" width="100%" cellspacing="0">
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
								
									<?php 
									if(!empty($products)){
										foreach ($products as $product){ ?>
											<tr>
												<td><?php echo $product["name"] ?></td>
												<td><?php echo $product["price"] ?></td>
												<td><img src="<?php echo base_url('gambar/'.$product["image"]) ?>" width="64" /></td>
												<td class="small"><?php echo substr($product["description"], 0, 120) ?>...</td>
												<td><?php echo $product["category"] ?></td>
												<td class="text-center">
													<a href="<?php echo base_url('admin/products/edit/'.$product["product_id"]) ?>"
														class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
													<a onclick="deleteConfirm('<?php echo base_url('admin/products/delete/'.$product["product_id"]) ?>')"
														href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
												</td>
											</tr>
										<?php }
									}else{ // Jika data tidak ada
										echo "<tr><td colspan='6'>Data Not Found</td></tr>";
									} ?>
								
								</tbody>
							</table>
						</div>


						<div class="row">
							<div class="col">
								<?php echo $this->ajax_pagination->create_links(); ?>
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

		function searchFilter(page_num){
			page_num = page_num?page_num:0;
			var keywords = $('#keywords').val();
			var sortBy = $('#sortBy').val();
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url('admin/products/ajaxPaginationData/'); ?>'+page_num,
				data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
				beforeSend: function(){
					$('.loading').show();
				},
				success: function(html){
					$('#dataList').html(html);
					$('.loading').fadeOut("slow");
				}
			});
		}

	</script>
</body>

</html>