<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['username']) || empty($_POST['phone_number']) || empty($_POST['login_email']) || empty($_POST['pass']) || empty($_POST['re_pass'])) {
    $error['empty'] = '';
  }
  $folder = "./public/image/avatar/";
  $fileName = $folder . basename($_FILES['avatar']['name']);
  move_uploaded_file($_FILES['avatar']['tmp_name'], $fileName);
  if ($_FILES['avatar']['size'] == 0) {
    $error['empty'] = '';
  }
  if ($_POST['pass'] != $_POST['re_pass']) {
    $error['empty'] = '';
  }

  if (empty($error)) {
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['login_email'];
    $password = $_POST['pass'];
    $avatar = $_FILES['avatar']['name'];
    // check trùng username
    $account = get_account_by_name($username);
    if (!empty($account)) {
      $error['username'] = '';
    }
    if (empty($account)) {
      register($username, $phone_number, $email, $password, $avatar);
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="public/admin/plug2ins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/admin/dist/css/adminlte.min.css">
</head>


<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php?ctr=/">Delicious Food</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign up to start your session</p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if (isset($error['empty'])) {
            echo '<p class="login-box-msg" style="color: red">Chưa nhập đầy đủ thông tin</p>';
          }
          if (isset($error['username'])) {
            echo '<p class="login-box-msg" style="color: red">Tên đăng  nhập đã tồn tại</p>';
          }
          if (empty($account)) {
            echo '<p class="login-box-msg" style="color: green">Đăng ký thành công</p>';
          }
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
          <!-- name -->
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <!-- phone_number -->
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="phone_number" placeholder="Phone number" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <!-- email -->
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="login_email" placeholder="Email" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <!-- password -->
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="pass" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- repassword -->
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="re_pass" placeholder="Re-Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- avatar -->
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="avatar" placeholder="">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- button -->
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="public/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="public/admin/dist/js/adminlte.min.js"></script>
</body>

</html>