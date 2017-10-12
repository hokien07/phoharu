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
        <h4 class="page-header">Sửa Trang Đối Tác</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['tentieude'])) {
            $errors[] = "tentieude";
          } else {
            $tentieude = mysqli_real_escape_string($dbc, strip_tags($_POST['tentieude']));
          }

          if (empty($_POST['noidungquandiem'])) {
            $errors[] = "noidungquandiem";
          } else {
            $noidungquandiem = mysqli_real_escape_string($dbc, strip_tags($_POST['noidungquandiem']));
          }

          if (empty($errors)) {

              //them khach hang vao bang khach hang.
              $q = "INSERT INTO hoptac
              (
                tenTieuDe,
                noiDungTieuDe
              )
              VALUES (
                '{$tentieude}',
                $noidungquandiem
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
              <label for="">Tên Quan Điểm
              <?php
              if (isset($errors) && in_array("tentieude", $errors, true)) {
                echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
              }
              ?>
            </label>
            <input type="text" name="tentieude" placeholder=" Tên Tiêu Đề" class="form-control" value="<?php if (isset($_POST['tentieude'])) echo strip_tags($_POST['tentieude']) ?>">

            <label for="">Nội Dung Quan Điểm
              <?php
              if (isset($errors) && in_array("noidungquandiem", $errors, true)) {
                echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
              }
              ?>
            </label>
            <textarea id="noidungquandiem" name="noidungquandiem" rows="8" cols="80" placeholder="Quan Điểm Nghề Nghiệp" class="form-control"></textarea>
            <?php echo "<script>CKEDITOR.replace('noidungquandiem');</script>" ?>


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
