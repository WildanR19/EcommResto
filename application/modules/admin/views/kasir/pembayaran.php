<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("admin/_partials/head.php") ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php if($this->session->userdata('nama')=='admin'){
        $this->load->view("admin/_partials/sidebar.php");
    } ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->
        

        <!-- Begin Page Content -->
        <div class="container">
            <div class="loading" style="display: none; z-index: 999; position:fixed; left:50%; right:50%;">
                <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>"/></div>
            </div>
            <div class="card mb-3">
                <div class="card-header row">
                    <div class="col">
                        <h3 class="mb-3">List Pembayaran</h1>
                    </div>
                    <div class="col-4">
                        <div class="input-group justify-content-end">
                            <input type="text" class="form-control bg-white border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" id="keywords" onkeyup="searchFilter();" />
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
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Customer Name</th>
                                    <th>Table Number</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($order as $row){ ?>
                                <tr>
                                    <td><?=$row['order_id']?></td>
                                    <td><?=$row['date']?></td>
                                    <td><?=$row['status']?></td>
                                    <td><?=$row['customer_name']?></td>
                                    <td><?=$row['table_number']?></td>
                                    <td class="text-center">
                                        <?=anchor(	'admin/kasir/detail/' . $row['order_id'], 
                                                    'Details',
                                                    ['class'=>'btn btn-default btn-info'])
                                        ?> 
                                        <a onclick="bayarConfirm('<?php echo base_url('admin/kasir/bayar/'.$row['order_id']) ?>')"
														href="#!" class="btn btn-primary">Bayar</a>
                                    </td>
                                </tr>
                                <?php } ?>
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
      function bayarConfirm(url){
			$('#btn-bayar').attr('href', url);
			$('#bayarModal').modal();
        }

        function searchFilter(page_num){
			page_num = page_num?page_num:0;
			var keywords = $('#keywords').val();
			var sortBy = $('#sortBy').val();
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url('admin/kasir/ajaxPaginationData/'); ?>'+page_num,
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