<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body class="hold-transition login-page">
<form action="<?php echo base_url('login/register'); ?>" class="register-form" method="POST">
        <h1>Register</h1>
        <?php echo validation_errors(); ?>

        <div class="txtb">
          <input type="text" name="nama">
          <span data-placeholder="Name"></span>
        </div>

        <div class="txtb">
          <input type="text" name="email">
          <span data-placeholder="E-mail"></span>
        </div>

        <div class="txtb">
          <input type="text" name="username">
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password">
          <span data-placeholder="Password"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password2">
          <span data-placeholder="Retype Password"></span>
        </div>

        <input type="submit" class="logbtn" value="Login" type="submit">

        <div class="login-text">
          I already have a Account <a href="<?php echo base_url('login'); ?>">Login</a>
        </div>

      </form>
      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

</script>
<!-- /.login-box -->
<?php $this->load->view("_partials/js.php") ?>
</body>
</html>