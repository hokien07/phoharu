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
        <h4 class="page-header">Chỉnh Sửa Thông Tin Trang Chủ</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['gioithieungan'])) {
            $errors[] = "gioithieungan";
          } else {
            $gioithieungan = mysqli_real_escape_string($dbc, strip_tags($_POST['gioithieungan']));
          }
          if (empty($_POST['gioithieudoitac'])) {
            $errors[] = "gioithieudoitac";
          } else {
            $gioithieudoitac = mysqli_real_escape_string($dbc, strip_tags($_POST['gioithieudoitac']));
          }

          if (empty($_POST['chitiethoatdong'])) {
            $errors[] = 'chitiethoatdong';
          } else {

            $chitiethoatdong = mysqli_real_escape_string($dbc, $_POST['chitiethoatdong']);

          }

          if (empty($_POST['tamnhinvachienluoc'])) {
            $errors[] = 'tamnhinvachienluoc';
          } else {
            $tamnhinvachienluoc = mysqli_real_escape_string($dbc, $_POST['tamnhinvachienluoc']);
          }

          if (empty($_POST['tuyendung'])) {
            $errors[] = 'tuyendung';
          } else {
            $tuyendung = mysqli_real_escape_string($dbc, $_POST['tuyendung']);
          }

          if (empty($_POST['taisaochon'])) {
            $errors[] = 'taisaochon';
          } else {
            $taisaochon = mysqli_real_escape_string($dbc, $_POST['taisaochon']);
          }

          //xu ly hinh anh.
          //banner1.
          if(isset($_FILES['banner1'])){
            $banner1 = $_FILES['banner1']['name'];
            $type = $_FILES['banner1']['type'];
            $size = $_FILES['banner1']['size'];

            move_uploaded_file(
            		$_FILES["banner1"]["tmp_name"],
            		"../../upload/trangchu/$banner1"
            	);
          }

          //banner2.
          if(isset($_FILES['banner2'])){
            $banner2 = $_FILES['banner2']['name'];
            $type = $_FILES['banner2']['type'];
            $size = $_FILES['banner2']['size'];

            move_uploaded_file(
            		$_FILES["banner2"]["tmp_name"],
            		"../../upload/trangchu/$banner2"
            	);
          }

          //banner3.
          if(isset($_FILES['banner3'])){
            $banner3 = $_FILES['banner3']['name'];
            $type = $_FILES['banner3']['type'];
            $size = $_FILES['banner3']['size'];

            move_uploaded_file(
            		$_FILES["banner3"]["tmp_name"],
            		"../../upload/trangchu/$banner3"
            	);
          }

          //banner4.
          if(isset($_FILES['banner4'])){
            $banner4 = $_FILES['banner4']['name'];
            $type = $_FILES['banner4']['type'];
            $size = $_FILES['banner4']['size'];

            move_uploaded_file(
                $_FILES["banner4"]["tmp_name"],
                "../../upload/trangchu/$banner4"
              );
          }

          //banner5.
          if(isset($_FILES['banner5'])){
            $banner5 = $_FILES['banner5']['name'];
            $type = $_FILES['banner5']['type'];
            $size = $_FILES['banner5']['size'];

            move_uploaded_file(
                $_FILES["banner5"]["tmp_name"],
                "../../upload/trangchu/$banner5"
              );
          }

          //banner6.
          if(isset($_FILES['banner6'])){
            $banner6 = $_FILES['banner6']['name'];
            $type = $_FILES['banner6']['type'];
            $size = $_FILES['banner6']['size'];

            move_uploaded_file(
                $_FILES["banner6"]["tmp_name"],
                "../../upload/trangchu/$banner6"
              );
          }




          if (empty($errors)) {
            //them khach hang vao bang khach hang.
            $q = "INSERT INTO trangchu
            (
              gioiThieuNgan,
              thongTinDoiTac,
              moataHoatDong,
              tamNhinChienLuoc,
              choDoLamViec,
              taiSaoChon,
              banner1,
              banner2,
              banner3,
              banner4,
              banner5,
              banner6
            )
            VALUES (
              '{$gioithieungan}',
              '{$gioithieudoitac}',
              '{$chitiethoatdong}',
              '{$tamnhinvachienluoc}',
              '{$tuyendung}',
              '{$taisaochon}',
              '{$banner1}',
              '{$banner2}',
              '{$banner3}',
              '{$banner4}',
              '{$banner5}',
              '{$banner6}'
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
              <label for="">Giới thiệu Ngắn
                <?php
                if (isset($errors) && in_array("gioithieungan", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text"  name="gioithieungan" class="form-control" cols="5" rows="5" placeholder="Giới thiệu ngắn về cửa hàng Phở Haru"></textarea>

              <label>Hình giới thiệu 1</label>
              <p><em> hình ảnh nên có chiều cao: 600px và chiều rộng: 960px</em></p>
              <input type="file" name="banner1">

              <label for="">Thông tin đối tác
                <?php
                if (isset($errors) && in_array("gioithieudoitac", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="gioithieudoitac" class="form-control" cols="5" rows="5"  placeholder="Giới thiệu ngắn về các đối tác"></textarea>

              <label>Hình đối tác</label>
              <p><em> hình ảnh nên có chiều cao: 600px và chiều rộng: 960px</em></p>
              <input type="file" name="banner2">

              <label for="">Mô tả các hoạt động
                <?php
                if (isset($errors) && in_array("chitiethoatdong", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="chitiethoatdong" class="form-control" cols="5" rows="5"  placeholder="Mô tả các hoạt động hay diễn ra tại Phở Haru"></textarea>

              <label>Hình hoạt động</label>
              <p><em> hình ảnh nên có chiều cao: 600px và chiều rộng: 960px</em></p>
              <input type="file" name="banner3">

              <label for="">Tầm Nhìn Và Chiến Luợc
                <?php
                if (isset($errors) && in_array("tamnhinvachienluoc", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="tamnhinvachienluoc" class="form-control" cols="5" rows="5"  placeholder="Tầm Nhìn Và Chiến Luợc"></textarea>

              <label>Hình Chiến Luợc</label>
              <p><em> hình ảnh nên có chiều cao: 600px và chiều rộng: 960px</em></p>
              <input type="file" name="banner4">

              <label for=""> Chế độ  làm việc của nhân viên
                <?php
                if (isset($errors) && in_array("tuyendung", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="tuyendung" class="form-control" cols="5" rows="5"  placeholder="Chế độ  làm việc của nhân viên"></textarea>

              <label>Hình nhân viên</label>
              <p><em> hình ảnh nên có chiều cao: 600px và chiều rộng: 960px</em></p>
              <input type="file" name="banner5">


              <label for=""> Tại sao chọn chúng tôi
                <?php
                if (isset($errors) && in_array("taisaochon", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <textarea type="text" name="taisaochon" class="form-control" cols="5" rows="5"  placeholder="Tại sao chọn chúng tôi"></textarea>

              <label>Hình Tại sao chọn chúng tôi  </label>
              <p><em> hình ảnh nên có chiều cao: 600px và chiều rộng: 960px</em></p>
              <input type="file" name="banner6">

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
