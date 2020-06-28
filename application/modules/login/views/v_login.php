<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="login"><b>Form</b>Login</a>
        </div>
		<!-- /.login-logo -->
		<?php echo $this->session->flashdata('login_failed'); ?>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1 mt-3">
                    <a href="<?php echo base_url('login/lupapw'); ?>">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="<?php echo base_url('login/register'); ?>" class="text-center">Register new account</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
<!-- /.login-box -->
<?php $this->load->view("_partials/js.php") ?>
</body>
</html>