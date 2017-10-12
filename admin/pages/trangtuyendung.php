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
        <h4 class="page-header"> Chuơng trình tuyển dụng</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['chuongtrinhdaotao'])) {
            $errors[] = "chuongtrinhdaotao";
          } else {
            $chuongtrinhdaotao = mysqli_real_escape_string($dbc, strip_tags($_POST['chuongtrinhdaotao']));
          }

          if (empty($_POST['motachuongtrinhdaotao'])) {
            $errors[] = "motachuongtrinhdaotao";
          } else {
            $motachuongtrinhdaotao = mysqli_real_escape_string($dbc, strip_tags($_POST['motachuongtrinhdaotao']));
          }
          //xu ly hinh anh.

          if(isset($_FILES['hinhdaotao'])) {
            $name = $_FILES['hinhdaotao']['name'];
            $type = $_FILES['hinhdaotao']['type'];
            $size = $_FILES['hinhdaotao']['size'];
            move_uploaded_file(
                $_FILES["hinhdaotao"]["tmp_name"],
                "../../upload/tuyendung/$name"
              );
          }

          if (empty($errors)) {

              //them khach hang vao bang khach hang.
              $q = "INSERT INTO trangtuyendung
              (
                hinhChuongTrinh,
                tenChuongTrinh,
                moTaChuongTrinh
              )
              VALUES (
                '{$name}',
                '{$chuongtrinhdaotao}',
                '{$motachuongtrinhdaotao}'
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
              <label for="">chương trình đào tạo
                <?php
                if (isset($errors) && in_array("chuongtrinhdaotao", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="chuongtrinhdaotao" placeholder="chương trình đào tạo" class="form-control" value="<?php if (isset($_POST['chuongtrinhdaotao'])) echo strip_tags($_POST['chuongtrinhdaotao']) ?>">

              <label for="">chi tiết chưong trình đào tạo
                <?php
                if (isset($errors) && in_array("motachuongtrinhdaotao", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea name="motachuongtrinhdaotao" rows="8" cols="80" placeholder="chi tiết chưong trình đào tạo" class="form-control"></textarea>

              <label>Hình Chuơng Trình Đào Tạo</label>
              <em>chiều cao hình nên là cao: 502px và rộng: 710px </em>
              <input type="file" name="hinhdaotao">
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
