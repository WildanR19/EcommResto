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
					<form action="<?php echo base_url('user/order') ?>" class="contact-form" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name*" name="cname">
						</div>
						<div class="form-group">
							<label for="tablenumber" class="text-white">Table Number*</label>
							  <select class="form-control" name="tablenumber">
								<option selected>Choose...</option>
									<?php for ($x = 0; $x <= 20; $x++) { ?>
										<option class="text-dark" value="<?php echo $x ?>"><?php echo $x ?></option>
									<?php } ?>
							  </select>
						</div>
						<div class="form-group">
							<textarea name="notes" id="" cols="30" rows="6" class="form-control"
								placeholder="Notes"></textarea>
						</div>
						<div class="small text-muted mb-3">
							* required fields
						</div>
					</form>
				</div>
				<div class="mx-auto">
					<?= anchor('user/order/clear_cart','Clear Cart',['class'=>'btn btn-danger py-3 px-5']) ?>
					<?= anchor(base_url('user/menu'),'Continue Shopping',['class'=>'btn btn-info py-3 px-5']) ?>
					<?= anchor('user/order','Check Out',['class'=>'btn btn-success py-3 px-5', 'onclick'=>'success()']) ?>
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
</body>

</html>
