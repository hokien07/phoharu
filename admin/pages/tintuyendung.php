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
        <h4 class="page-header"> Thêm tin tuyển dụng</h4>
        <?php
        //xu ly from nhap lieu.
        if(isset($_POST['submit'])) {
          $errors = array();
          if (empty($_POST['vitrituyen'])) {
            $errors[] = "vitrituyen";
          } else {
            $vitrituyen = mysqli_real_escape_string($dbc, strip_tags($_POST['vitrituyen']));
          }

          if (empty($_POST['noilamviec'])) {
            $errors[] = "noilamviec";
          } else {
            $noilamviec = mysqli_real_escape_string($dbc, strip_tags($_POST['noilamviec']));
          }

          if(isset($_POST['level'])) {
            $idvitri = $_POST['level'];
          }

          if(isset($_POST['nghanh'])) {
            $idNghanh = $_POST['nghanh'];
          }

          if (empty($errors)) {

              //them khach hang vao bang khach hang.
              $q = "INSERT INTO tintuyendung
              (
                ngayDang,
                idviTri,
                idNghanh,
                viTriTuyen,
                noiLamViec
              )
              VALUES (
                NOW(),
                {$idvitri},
                {$idNghanh},
                '{$vitrituyen}',
                '{$noilamviec}'
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
            <form class="tintuyendung" method="post">
              <div class="select-tin-tuyen-dung">
                <div>
                  <strong> Chức Vụ: </strong>
                  <select name="level" id="level">
                    <option value="">Tất Cả</option>
                    <?php
                        //lay chuc vu tu database.
                        $qChucVu = "
                            SELECT * FROM viTriTuyenDung
                        ";
                        $rChucVu = mysqli_query($dbc, $qChucVu);
                        kiemtraquery($rChucVu, $qChucVu);

                        while($chucvu = mysqli_fetch_array($rChucVu)){
                          echo "<option value='{$chucvu['idVTTDung']}'>". $chucvu['tenVTTDung']. "</option>";
                        }
                    ?>
                  </select>
                </div>

                <div>
                  <strong>Chuyên Ngành: </strong>
                  <select name="nghanh" id="level">
                    <option value="">Tất Cả</option>
                    <?php
                        //lay chuc vu tu database.
                        $qNghanh = "
                            SELECT * FROM nghanhtuyendung
                        ";
                        $rNghanh = mysqli_query($dbc, $qNghanh);
                        kiemtraquery($rNghanh, $qNghanh);

                        while($nghanh = mysqli_fetch_array($rNghanh)){
                          echo "<option value='{$nghanh['idNTDung']}'>". $nghanh['tenNTDung']. "</option>";
                        }
                    ?>
                  </select>
                </div>
              </div><!--/.select-tin-tuyen-dung-->

              <label for="">Vị trí ứng tuyển
                <?php
                if (isset($errors) && in_array("vitrituyen", $errors, true)) {
                  echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                }
                ?>
              </label>
              <input type="text" name="vitrituyen" placeholder=" Vị trí tuyển" class="form-control" value="<?php if (isset($_POST['vitrituyen'])) echo "Bạn mới thêm: " . strip_tags($_POST['vitrituyen']) ?>">

                <label for=""> Nơi làm việc
                  <?php
                  if (isset($errors) && in_array("noilamviec", $errors, true)) {
                    echo "<p class='warning'>Vui lòng nhập thông tin. </p>";
                  }
                  ?>
                </label>
                <input type="text" name="noilamviec" placeholder="Nơi làm việc" class="form-control" value="<?php if (isset($_POST['noilamviec'])) echo "Bạn mới thêm: " . strip_tags($_POST['noilamviec']) ?>">


              <input type="submit" name="submit" value="Thêm" class="btn btn-primary btn-capnhat">
            </form>
          </div>
        </div>
      </div>

      <!--tat ca hinh anh-->
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Ngày đăng</th>
            <th>Vị trí tuyển</th>
            <th>Nơi làm việc</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $qtins = "SELECT * FROM tintuyendung ORDER BY idTinTuyenDung DESC LIMIT 0,20";
            $rtins = mysqli_query($dbc, $qtins);
            $stt = 1;
            while ($tins = mysqli_fetch_array($rtins)) {
              echo "
              <tr>
                <th scope='row'>{$stt}</th>
                <td>{$tins['ngayDang']}</td>
                <td>{$tins['viTriTuyen']}</td>
                <td>{$tins['noiLamViec']}</td>
              </tr>
              ";
              $stt++;
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php include("footer.php"); ?>
