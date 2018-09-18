<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Suzuki Motos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="shortcut icon" sizes="57x57" href="<?= base_url() ?>assets/img/favicon.png">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>bower_components/admin-lte/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>/bower_components/admin-lte/dist/css/skins/_all-skins.min.css">
  <!-- Estilos-->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">  
</head>

<body class="hold-transition login-page skin-blue sidebar-mini">
<div class="warpper"> 
  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url() ?>/suzuki" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>trum</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Suzuki</b> Atrum</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"></nav>
  </header>
</div>

<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url() ?>/atrum"><b>SUZUKI</b> Atrum</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- Logo suzki -->
    <img src="<?= base_url() ?>/assets/img/favicon.png" class="img-responsive centrado">
  
    <form action="<?= base_url() ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" id="username" name="username" pattern="[A-Za-z0-9._]{1,20}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password" pattern="[A-Za-z0-9._]{1,20}" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <p class="login-box-msg">Escribe tus credenciales para iniciar sesion</p>
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-flat pull-right">Iniciar</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
<!-- jQuery 3 -->
<script src="<?= base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</html>
