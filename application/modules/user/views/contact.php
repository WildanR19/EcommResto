<!DOCTYPE html>
<html lang="en">

<head>
	<title>Checkout</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body>
  <?php $this->load->view("_partials/navbar.php") ?>
  <?php $this->load->view("_partials/footer.php") ?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <!-- Checkout Modal-->
  <?php $this->load->view("_partials/modal.php") ?>

  <?php $this->load->view("_partials/js.php") ?>
  </body>

</html>