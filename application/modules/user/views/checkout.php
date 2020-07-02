<!DOCTYPE html>
<html lang="en">

<head>
	<title>Checkout</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body>
	<?php $this->load->view("_partials/navbar.php") ?>
	<section class="ftco-section contact-section" style="padding: 2em 0;">
		<h1 class="text-center">Checkout</h1>
		<div class="container mt-5">
			<div class="row block-9">
				<div class="col contact-info ftco-animate">
					<div class="row">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Produk</th>
									<th>Harga</th>
									<th>Qty</th>
									<th>Subtotal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="detail_cart">
								
							</tbody>

						</table>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 ftco-animate">
					<div class="contact-form">
						<div class="form-group">
							<label for="tablenumber" class="text-white">Nama : <?php echo ucfirst($this->session->userdata('username')); ?></label>
						</div>
						<div class="form-group">
							<label for="tablenumber" class="text-white">No.Meja : <?php echo ucfirst($this->session->userdata('nomeja')); ?></label>
						</div>
					</div>
				</div>
				<div class="mx-auto">
					<?= anchor('user/order/clear_cart','Clear Cart',['class'=>'btn btn-danger py-3 px-5']) ?>
					<?= anchor(base_url('user/menu'),'Continue Shopping',['class'=>'btn btn-info py-3 px-5']) ?>
					<a id="btCheckout" class="btn btn-success btn-md py-3 px-5 text-white" onclick="getCname();">Selesai Order <i class="fa fa-check"></i></a>
					
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view("_partials/footer.php") ?>
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>
	<!-- Checkout Modal-->
	<?php $this->load->view("_partials/modal.php") ?>

	<?php $this->load->view("_partials/js.php") ?>
	<script>
		$('#btCheckout').click(function(e) {
			e.preventDefault();
			
			Swal.fire({
				title: 'Selesai?',
				text: "Yakin Selesai Mengorder ?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if (result.value) {
					window.location.href = "<?php echo base_url('user/order'); ?>" ;
				}
			})
		});
	</script>
</body>

</html>
