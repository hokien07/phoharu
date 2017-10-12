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
        <h4 class="page-header">Chỉnh Sửa Thông Tin Giới Thiệu</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['sanpham'])) {
            $errors[] = "sanpham";
          } else {
            $sanpham = mysqli_real_escape_string($dbc, strip_tags($_POST['sanpham']));
          }
          if (empty($_POST['congnghechebien'])) {
            $errors[] = "congnghechebien";
          } else {
            $congnghechebien = mysqli_real_escape_string($dbc, strip_tags($_POST['congnghechebien']));
          }

          if (empty($_POST['thitruong'])) {
            $errors[] = 'thitruong';
          } else {

            $thitruong = mysqli_real_escape_string($dbc, $_POST['thitruong']);

          }

          if (empty($_POST['chatluong'])) {
            $errors[] = 'chatluong';
          } else {
            $chatluong = mysqli_real_escape_string($dbc, $_POST['chatluong']);
          }

          //xu ly hinh anh.
          //hinh1.
          if(isset($_FILES['hinh1'])){
            $hinh1 = $_FILES['hinh1']['name'];
            $type = $_FILES['hinh1']['type'];
            $size = $_FILES['hinh1']['size'];

            move_uploaded_file(
            		$_FILES["hinh1"]["tmp_name"],
            		"../../upload/about/$hinh1"
            	);
          }
          //hinh2.
          if(isset($_FILES['hinh2'])){
            $hinh2= $_FILES['hinh2']['name'];
            $type = $_FILES['hinh2']['type'];
            $size = $_FILES['hinh2']['size'];

            move_uploaded_file(
                $_FILES["hinh2"]["tmp_name"],
                "../../upload/about/$hinh2"
              );
          }
          //hinh3.
          if(isset($_FILES['hinh3'])){
            $hinh3= $_FILES['hinh3']['name'];
            $type = $_FILES['hinh3']['type'];
            $size = $_FILES['hinh3']['size'];

            move_uploaded_file(
                $_FILES["hinh3"]["tmp_name"],
                "../../upload/about/$hinh2"
              );
          }
          //hinh4.
          if(isset($_FILES['hinh4'])){
            $hinh4= $_FILES['hinh4']['name'];
            $type = $_FILES['hinh4']['type'];
            $size = $_FILES['hinh4']['size'];

            move_uploaded_file(
                $_FILES["hinh4"]["tmp_name"],
                "../../upload/about/$hinh4"
              );
          }

          if (empty($errors)) {
            //them khach hang vao bang khach hang.
            $q = "INSERT INTO gioithieu
            (
              sanPham,
              congThuc,
              thiTruong,
              chatLuong,
              hinh1,
              hinh2,
              hinh3,
              hinh4
            )
            VALUES (
              '{$sanpham}',
              '{$congnghechebien}',
              '{$thitruong}',
              '{$chatluong}',
              '{$hinh1}',
              '{$hinh2}',
              '{$hinh3}',
              '{$hinh4}'
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
              <label for="">Sản Phẩm
                <?php
                if (isset($errors) && in_array("sanpham", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text"  name="sanpham" class="form-control" cols="5" rows="5" placeholder="Giới thiệu về sản phẩm phở Haru"></textarea>

              <label>Hình Sản Phẩm</label>
              <p><em> hình ảnh nên có chiều cao: 750px và chiều rộng: 900px</em></p>
              <input type="file" name="hinh1">

              <label for="">Công Nghệ Chế Biến
                <?php
                if (isset($errors) && in_array("congnghechebien", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="congnghechebien" class="form-control" cols="5" rows="5"  placeholder="Giới thiệu ngắn về các đối tác"></textarea>

              <label>Hình Công Nghệ Chế Biến</label>
              <p><em> hình ảnh nên có chiều cao: 750px và chiều rộng: 900px</em></p>
              <input type="file" name="hinh2">

              <label for="">Thị Truờng Tiêu Thụ
                <?php
                if (isset($errors) && in_array("thitruong", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="thitruong" class="form-control" cols="5" rows="5"  placeholder="Mô tả các hoạt động hay diễn ra tại Phở Haru"></textarea>

              <label>Hình Thị Truờng Tiêu Thụ</label>
              <p><em> hình ảnh nên có chiều cao: 750px và chiều rộng: 900px</em></p>
              <input type="file" name="hinh3">

              <label for="">Chứng Nhận Chất Luợng
                <?php
                if (isset($errors) && in_array("chatluong", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="chatluong" class="form-control" cols="5" rows="5"  placeholder="Tầm Nhìn Và Chiến Luợc"></textarea>

              <label>Hình Chứng Nhận</label>
              <p><em> hình ảnh nên có chiều cao: 750px và chiều rộng: 900px</em></p>
              <input type="file" name="hinh4">

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
