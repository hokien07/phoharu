<?php include("../../database/dbCon.php"); ?>
<?php include("../../function/function.php"); ?>
<?php include("header.php"); ?>

<style media="screen">
label {
  display: block;
  margin-top: 20px;
  font-size: 18px;
}
.btn-capnhat {
  display: block;
  margin: 20px auto;
}
</style>

<div id="wrapper">
  <?php include("topmenu.php"); ?>
  <?php include("sidebar.php"); ?>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="page-header">Đăng tin tức mới</h4>

        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['taikhoan'])) {
            $errors[] = "taikhoan";
          } else {
            $taikhoan = mysqli_real_escape_string($dbc, strip_tags($_POST['taikhoan']));
          }

          if (empty($_POST['matkhau'])) {
            $errors[] = "matkhau";
          } else {
            $matkhau = mysqli_real_escape_string($dbc, strip_tags($_POST['matkhau']));
            $matkhau = md5($matkhau);
          }

          if (empty($errors)) {

              //them khach hang vao bang khach hang.
              $q = "INSERT INTO user
              (
                tenUser,
                matKhau
              )
              VALUES (
                '{$taikhoan}',
                '{$matkhau}'
              )";

              $r = mysqli_query($dbc, $q);
              kiemtraquery($r, $q);

            //kiem tra xem da them thnanh cong
            if (mysqli_affected_rows($dbc) == 1) {
              $mes = "<p class='success'>Thêm Thành Công!</p>";
            } else {
              $mes = "<p class='warning'>Thêm Không Thành Công. Vui lòng kiểm tra lại.</p>";
            }
          } else {
            $mes = "<p class='warning'> Vui Lòng Nhập Đầy Đủ Thông Tin.";
          }
        }//end main if condituon submit.
        ?>
      <?php if(isset($mes)) echo $mes; ?>
      </div>
      <div class="form-nghanh-tuyen-dung">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <form class="nghanhtuyendung" method="post">
              <label for="">Tài khoản
                <?php
                if (isset($errors) && in_array("taikhoan", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="taikhoan" placeholder="Tài khoản dùng để đăng nhập" class="form-control" value="<?php if (isset($_POST['taikhoan'])) echo  strip_tags($_POST['taikhoan']) ?>">

              <label for="">Mật khẩu
                <?php
                if (isset($errors) && in_array("matkhau", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="password" name="matkhau" placeholder="Tiêu đề" class="form-control" value="<?php if (isset($_POST['matkhau'])) echo  strip_tags($_POST['matkhau']) ?>">

              <input type="submit" name="submit" value="Thêm" class="btn btn-primary btn-capnhat">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php include("footer.php"); ?>
