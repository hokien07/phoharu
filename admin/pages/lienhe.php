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
          if (empty($_POST['tieude'])) {
            $errors[] = "tieude";
          } else {
            $tieude = mysqli_real_escape_string($dbc, strip_tags($_POST['tieude']));
          }

          if (empty($_POST['noidung'])) {
            $errors[] = "noidung";
          } else {
            $noidung = mysqli_real_escape_string($dbc, strip_tags($_POST['noidung']));
          }
          //xu ly hinh anh.

          if(isset($_FILES['hinhdaidien'])) {
            $name = $_FILES['hinhdaidien']['name'];
            $type = $_FILES['hinhdaidien']['type'];
            $size = $_FILES['hinhdaidien']['size'];
            move_uploaded_file(
            		$_FILES["hinhdaidien"]["tmp_name"],
            		"../../upload/tin-tuc/$name"
            	);
          }

          if (empty($errors)) {

              //them khach hang vao bang khach hang.
              $q = "INSERT INTO tintuc
              (
                tieude,
                urlhinh,
                mota
              )
              VALUES (
                '{$tieude}',
                '{$name}',
                '{$noidung}'
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
            <form class="nghanhtuyendung" method="post" enctype="multipart/form-data">
              <label for="">Tiêu đề
                <?php
                if (isset($errors) && in_array("tieude", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="tieude" placeholder="Tiêu đề" class="form-control" value="<?php if (isset($_POST['tieude'])) echo  strip_tags($_POST['tieude']) ?>">

              <label for="">Nội dung
                <?php
                if (isset($errors) && in_array("noidung", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea name="noidung" rows="30" cols="80" class="form-control"></textarea>

              <label>Hình đại diện</label>
              <input type="file" name="hinhdaidien">

              <input type="submit" name="submit" value="Đăng bài viết" class="btn btn-primary btn-capnhat">
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
