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
          if (empty($_POST['doitac'])) {
            $errors[] = "doitac";
          } else {
            $doitac = mysqli_real_escape_string($dbc, strip_tags($_POST['doitac']));
          }

          //xu ly hinh anh.
          //hinh1.
          if(isset($_FILES['hinhdoitac'])){
            $hinh = $_FILES['hinhdoitac']['name'];
            $type = $_FILES['hinhdoitac']['type'];
            $size = $_FILES['hinhdoitac']['size'];

            move_uploaded_file(
            		$_FILES["hinhdoitac"]["tmp_name"],
            		"../../upload/breand/$hinh"
            	);
          }
          if (empty($errors)) {
            //them khach hang vao bang khach hang.
            $q = "INSERT INTO breand
            (
              hinhDoiTac,
              thongTinDoiTac
            )
            VALUES (
              '{$hinh}',
              '{$doitac}'
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
              <label for="">Giới thiệu ngắn đối tác
                <?php
                if (isset($errors) && in_array("doitac", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="doitac" class="form-control" cols="5" rows="5"  placeholder="Tầm Nhìn Và Chiến Luợc"></textarea>
              <label>Logo Đối Tác</label>
              <input type="file" name="hinhdoitac">
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
