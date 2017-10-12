<?php include("../../database/dbCon.php"); ?>
<?php include("../../function/function.php"); ?>
<?php include("header.php"); ?>
<style media="screen">
.select-tin-tuyen-dung div {
  margin-top: 10px;
}
.select-tin-tuyen-dung div strong {
  display: inline-block;
  width: 200px;
}
.select-tin-tuyen-dung div select {
  font-size: 116%;
  color: #000;
  padding: 2px 2px;
  border: 1px solid #ccc;
}

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
        <h4 class="page-header"> Cập nhật mật khẩu tài khoản</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['oldpass'])) {
            $errors[] = "oldpass";
          } else {
            $oldpass = mysqli_real_escape_string($dbc, strip_tags($_POST['oldpass']));
          }

          if (empty($_POST['newpass'])) {
            $errors[] = "newpass";
          } else {
            $newpass = mysqli_real_escape_string($dbc, strip_tags($_POST['newpass']));
          }

          if (empty($_POST['newpass1'])) {
            $errors[] = "newpass1";
          } else {
            $newpass1 = mysqli_real_escape_string($dbc, strip_tags($_POST['newpass1']));
          }


          if (empty($errors)) {
            //kiem tra mat cu khau co ton tai
            if(md5($oldpass)!= $_SESSION['matkhau']) {
              $mes = "Mật khẩu cũ không tồn tại";
            }else {
              //kiem tra mat khau moi co trung nhau.
              if($newpass != $newpass1) {
                $mes = "Mật khẩu mới phải trùng nhau";
              }else {
                //cap nhat mat khau.
                $newpass = md5($newpass);
                $qCapNhat = "
                UPDATE user
                SET matkhau = '{$newpass}'
                WHERE id = '{$_SESSION['iduser']}'
                ";
                $rCapNhap = mysqli_query($dbc, $qCapNhat);

                //kiem tra xem da them thnanh cong
                if (mysqli_affected_rows($dbc) == 1) {
                  $mes = "<p class='success'> Đổi thành công";
                }else {
                  $mes = "<p class='warning'>Vui Lòng Nhập Đầy Đủ Thông Tin.";
                }
              }
            }
          }
        }//end main if condituon submit.

        ?>
        <?php if(isset($mes)) echo $mes; ?>
      </div>
      <div class="form-nghanh-tuyen-dung">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <form class="tintuyendung" method="post">
              <label for="">Mật khẩu hiện tại
                <?php
                if (isset($errors) && in_array("oldpass", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="password" name="oldpass" placeholder="Mật khẩu hiện tại" class="form-control">

              <label for="">Mật khẩu mới
                <?php
                if (isset($errors) && in_array("newpass", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="password" name="newpass" placeholder="Mật khẩu mới" class="form-control" >

              <label for="">Nhập lại mật khẩu mới
                <?php
                if (isset($errors) && in_array("newpass1", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="password" name="newpass1" placeholder="Nhập lại mật khẩu mới" class="form-control" >

              <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary btn-capnhat">
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
