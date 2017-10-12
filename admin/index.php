<?php
  session_start();
  include("../database/dbCon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Phở Haru  - Đăng nhập hệ thống</title>
  <!-- Bootstrap Core CSS -->
  <link href="dist/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="dist/css/sb-admin-2.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="dist/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<?php
  if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau = $_POST['matkhau'];


    // Xử lý để tránh MySQL injection
    $taikhoan = stripslashes($taikhoan);
    $matkhau = stripslashes($matkhau);
    $matkhau = md5($matkhau);

    //kiemtra co ton tai khong?
    $q = "SELECT * FROM user WHERE tenUser = '{$taikhoan}' AND matKhau = '{$matkhau}'";
    $r = mysqli_query($dbc, $q);
    $user = mysqli_fetch_array($r);
    $id = $user['id'];

    if(mysqli_num_rows($r) == 1) {
      $_SESSION['taikhoan'] = $taikhoan;
      $_SESSION['matkhau'] = $matkhau;
      $_SESSION['iduser'] = $id;
      header("location:pages/admin.php");
    }else {
      $mes = "tên đăng nhập hoặc mật khẩu không đúng";

    }

  }

?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Vui lòng Đăng nhập</h3>
          </div>
          <div class="panel-body">
            <form role="form" method="post">
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Tài khoản" name="taikhoan" type="text" autofocus>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="mật Khẩu" name="matkhau" type="password" value="">
                </div>
                <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ
                  </label>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-lg btn-success btn-block">
                <?php if(isset($mes)) echo $mes; ?>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="dist/js/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="dist/css/bootstrap/js/bootstrap.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
