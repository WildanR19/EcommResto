<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">

<form action="<?php echo base_url('login/register'); ?>" method="post" accept-charset="utf-8">
<?php echo validation_errors(); ?>    
<div class="row justify-content-center">    
        <div class="col-md-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
        </div>
</div>
</form>
</div>
</body>
</html>