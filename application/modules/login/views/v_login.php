<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body class="hold-transition login-page">
<form action="<?php echo base_url('login/aksi_login'); ?>" class="login-form" method="POST">
        <h1>Login</h1>
        <?php echo $this->session->flashdata('login_failed'); ?>

        <div class="txtb">
          <input type="text" name="username">
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password">
          <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="logbtn" value="Login" type="submit">

        <div class="bottom-text">
          Don't have account? <a href="<?php echo base_url('login/register'); ?>">Sign up</a>
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