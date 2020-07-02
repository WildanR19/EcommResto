<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fontawesome-free/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginuser/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/loginuser/main.css">

</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url('user/loginuser/aksi_login') ?>" method="POST">
					<span class="login100-form-title p-b-43">
						Login to continue
          </span>
          <?php echo $this->session->flashdata('login_failed'); ?>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="number" name="nomeja">
						<span class="focus-input100"></span>
						<span class="label-input100">No.Meja</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url() ?>assets/images/about.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/loginuser/main.js"></script>

</body>
</html>