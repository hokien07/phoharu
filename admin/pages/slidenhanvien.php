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
        <h4 class="page-header"> Sửa trang tuyển dụng</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['chucvunhanvien'])) {
            $errors[] = "chucvunhanvien";
          } else {
            $chucvunhanvien = mysqli_real_escape_string($dbc, strip_tags($_POST['chucvunhanvien']));
          }

          if (empty($_POST['motanhanvien'])) {
            $errors[] = "motanhanvien";
          } else {
            $motanhanvien = mysqli_real_escape_string($dbc, strip_tags($_POST['motanhanvien']));
          }
          //xu ly hinh anh.

          if(isset($_FILES['hinhnhanvien'])) {
            $name = $_FILES['hinhnhanvien']['name'];
            $type = $_FILES['hinhnhanvien']['type'];
            $size = $_FILES['hinhnhanvien']['size'];
            move_uploaded_file(
            		$_FILES["hinhnhanvien"]["tmp_name"],
            		"../../upload/slide/$name"
            	);
          }

          if (empty($errors)) {

              //them khach hang vao bang khach hang.
              $q = "INSERT INTO slidenhanvien
              (
                chucVuNhanVien,
                motaNhanVien,
                hinhNhanVien
              )
              VALUES (
                '{$chucvunhanvien}',
                '{$motanhanvien}',
                '{$name}'
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
            <form class="tintuyendung" method="post" enctype="multipart/form-data">

              <label for="">Chức vụ nhân viên
                <?php
                if (isset($errors) && in_array("chucvunhanvien", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="chucvunhanvien" placeholder="Chức vụ nhân viên" class="form-control" value="<?php if (isset($_POST['chucvunhanvien'])) echo strip_tags($_POST['chucvunhanvien']) ?>">

              <label for="">Mô tả nhân viên
                <?php
                if (isset($errors) && in_array("motanhanvien", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea name="motanhanvien" rows="8" cols="80" placeholder="Mô tả nhân viên" class="form-control"></textarea>

              <label for="">Hình nhân viên</label>
              <em>chiều cao của hình ảnh nên là: cao: 502px, rộng: 710px </em>
              <input type="file" name="hinhnhanvien" >

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
