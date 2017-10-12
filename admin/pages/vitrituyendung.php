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
        <h4 class="page-header">Thêm Vị Trí Tuyển Dụng</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['vitrituyendung'])) {
            $errors[] = "vitrituyendung";
          } else {
            $vitrituyendung = mysqli_real_escape_string($dbc, strip_tags($_POST['vitrituyendung']));
          }

          if (empty($errors)) {
            //kiem tra da ton tai chua
            $q = "
              SELECT tenVTTDung FROM viTriTuyenDung WHERE tenVTTDung = '{$vitrituyendung}'
            ";
            if(mysqli_affected_rows($dbc) == 0) {
              //them khach hang vao bang khach hang.
              $q = "INSERT INTO viTriTuyenDung
              (
                tenVTTDung
              )
              VALUES (
                '{$vitrituyendung}'
              )";
            }else {
              echo "Vị trí đã tồn tại";
            }
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
      <div class="form-vi-tri-tuyen-dung">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <form class="vitrituyendung" method="post">
              <label for="">Tên Vị Trí Tuyển Dụng
                <?php
                if (isset($errors) && in_array("vitrituyendung", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="vitrituyendung" placeholder="Tên Vị Trí Tuyển Dụng" class="form-control" value="<?php if (isset($_POST['vitrituyendung'])) echo "Bạn mới thêm chức vụ: " . strip_tags($_POST['vitrituyendung']) ?>">

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
