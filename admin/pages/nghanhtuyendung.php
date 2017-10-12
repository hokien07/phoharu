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
        <h4 class="page-header">Thêm Nghành Tuyển Dụng</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['nghanhtuyendung'])) {
            $errors[] = "nghanhtuyendung";
          } else {
            $nghanhtuyendung = mysqli_real_escape_string($dbc, strip_tags($_POST['nghanhtuyendung']));
          }

          if (empty($errors)) {
            //kiem tra da ton tai chua
            $q = "
              SELECT tenNTDung FROM nghanhtuyendung WHERE tenNTDung = '{$nghanhtuyendung}'
            ";
            if(mysqli_affected_rows($dbc) == 0) {
              //them khach hang vao bang khach hang.
              $q = "INSERT INTO nghanhtuyendung
              (
                tenNTDung
              )
              VALUES (
                '{$nghanhtuyendung}'
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
      <div class="form-nghanh-tuyen-dung">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <form class="nghanhtuyendung" method="post">
              <label for="">Tên nghành tuyển dụng
                <?php
                if (isset($errors) && in_array("nghanhtuyendung", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="nghanhtuyendung" placeholder="Tên nghành tuyển dụng" class="form-control" value="<?php if (isset($_POST['nghanhtuyendung'])) echo "Bạn mới thêm: " . strip_tags($_POST['nghanhtuyendung']) ?>">

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
