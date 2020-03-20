<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<title>Dashboard
	</title>
</head>

<body>
	<h3>Dashboard</h3>
	<p>
		Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('email')); ?>!
		Untuk logout dari sistem, silakan klik <?php echo anchor(base_url('login/logout'),'di sini...'); ?>
	</p>
</body>

</html>