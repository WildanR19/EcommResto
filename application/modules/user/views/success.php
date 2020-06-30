<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Success Check</title>
</head>

<body>
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>

		Swal.fire(
		'Success!',
		'Please wait for your order',
		'success'
		)

		window.setTimeout(function () {

			// Move to a new location or you can do something else
			window.location.href = "<?php echo base_url() ?>";

		}, 3000);
	</script>

</body>

</html>
