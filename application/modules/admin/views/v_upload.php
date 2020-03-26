<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<center>
		<h1>Membuat Upload File Dengan CodeIgniter |
			MalasNgoding.com</h1>
	</center>
	<?php echo $error;?>
	<?php echo form_open_multipart('upload/aksi_upload');?>
	<input type="file" name="berkas" />
	<br /><br />
	<input type="submit" value="upload" />
	</form>
</body>
</html>