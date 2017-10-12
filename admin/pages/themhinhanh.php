<?php include("../../database/dbCon.php"); ?>
<?php include("../../function/function.php"); ?>
<?php include("header.php"); ?>

<style media="screen">
label {
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
        <h4 class="page-header">Thêm đối tác</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['tieude'])) {
            $errors[] = "tieude";
          } else {
            $tieude = mysqli_real_escape_string($dbc, strip_tags($_POST['tieude']));
          }

          if (empty($_POST['mota'])) {
            $errors[] = "mota";
          } else {
            $mota = mysqli_real_escape_string($dbc, strip_tags($_POST['mota']));
          }

          //xu ly hinh anh.
          //hinh1.
          if(isset($_FILES['hinhanh'])){
            $hinh = $_FILES['hinhanh']['name'];
            $type = $_FILES['hinhanh']['type'];
            $size = $_FILES['hinhanh']['size'];

            move_uploaded_file(
            		$_FILES["hinhanh"]["tmp_name"],
            		"../../upload/thu-vien/$hinh"
            	);
          }
          if (empty($errors)) {
            //them khach hang vao bang khach hang.
            $q = "INSERT INTO hinhanh
            (
              tieuDeHinh,
              moTaHinh,
              urlHinh
            )
            VALUES (
              '{$tieude}',
              '{$mota}',
              '{$hinh}'
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
      <div class="form-index">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <form class="trangchu" method="post" enctype="multipart/form-data">
              <label for="">Tiêu đề hình
                <?php
                if (isset($errors) && in_array("doitac", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="tieude" class="form-control" placeholder="Tiêu đề hình">

              <label for="">Mô tả hình
                <?php
                if (isset($errors) && in_array("mota", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="mota" class="form-control" placeholder="Tiêu đề hình">

              <label>Chọn hình</label>
              <input type="file" name="hinhanh">

              <input type="submit" name="submit" value="Cập Nhật" class="btn btn-primary btn-capnhat">
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
