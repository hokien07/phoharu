<?php include ("database/dbCon.php"); ?>
<?php include ("function/function.php"); ?>
<?php include ("block/header.php"); ?>

<body>
<?php include ("block/topmenu.php"); ?>

  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
  </div>

  <div class="content-tuyen-dung">
    <div class="container">
      <div class="header-tuyen-dung">
        <h2>Nhân Viên Của Chúng Tôi</h2>
        <p>Nhân viên của chúng tôi được cảm hứng là tốt nhất mà họ có thể được, nơi mà đội ngũ của chúng tôi đa dạng như thị trường chúng tôi phục vụ.</p>
        <p>Chúng tôi thúc đẩy một môi trường cởi mở, nơi sự sáng tạo phát triển và cung cấp cho bạn những cơ hội bạn cần phát triển.</p>
      </div><!--./header-tuyen-dung-->
    </div>

    <div class="slide-nhan-vien">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php
            //dem so luong slide
            $qSlide = "
                SELECT * FROM slidenhanvien
            ";
            $rSlide = mysqli_query($dbc, $qSlide);
            kiemtraquery($rSlide, $qSlide);
            $count = 0;
            while ($slide = mysqli_fetch_array($rSlide)):
          ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count; ?>" class="active"></li>
          <?php $count++; endwhile; ?>
        </ol>
        <div class="carousel-inner">
          <?php
            //lay thong tin nhan vien tu database
            $qSlide = "
                SELECT * FROM slidenhanvien
            ";
            $rSlide = mysqli_query($dbc, $qSlide);
            kiemtraquery($rSlide, $qSlide);
            while ($slide = mysqli_fetch_array($rSlide)):
          ?>
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="hinh-slide">
                  <img class="d-block w-100" src="upload/slide/<?php echo $slide['hinhNhanVien'] ?>" alt="<?php echo $slide['chucVuNhanVien'] ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="meta-slide">
                  <h2><?php echo $slide['chucVuNhanVien'] ?></h2>
                  <p><?php echo the_content($slide['motaNhanVien']); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </div><!--/.slide-nhan-vien-->

    <div class="container">
      <div class="ky-nang-tuyen-dung">
        <div class="header-ky-nag">
          <h2>Thành Công Cùng Chúng Tôi</h2>
          <p> Để duy trì tính cạnh tranh trong môi trường làm việc thay đổi ngày nay, chúng tôi đào tạo nhân viên của chúng tôi để có cả kiến thức và kỹ năng có liên quan, hiện tại và được mong muốn.</p>
          <p>Phở Haru luôn cố gắng nâng cao năng lực và nâng cao năng lực chuyên môn để xây dựng nền tảng cho sự phát triển và thành công của công ty.</p>
        </div><!--/.header-ky-nang-->

        <div class="drop-down-ky-nang">
          <?php
              //lay chuong trinh dao tao tu database
              $qDaoTao = "
                SELECT * FROM trangtuyendung
              ";
              $rDaoTao = mysqli_query($dbc, $qDaoTao);
              kiemtraquery($rDaoTao, $qDaoTao);
              while($chuongtrinh = mysqli_fetch_array($rDaoTao)) :
          ?>

          <button class="accordion"><?php echo $chuongtrinh['tenChuongTrinh']; ?></button>
          <div class="panel">
            <div class="row">
              <div class="col-md-6">
                <div class="hinh-ky-nag">
                  <img class="d-block w-100" src="upload/tuyendung/<?php echo $chuongtrinh['hinhChuongTrinh']; ?>" alt="<?php echo $chuongtrinh['tenChuongTrinh']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="meta-ky-nag">
                  <h2><?php echo $chuongtrinh['tenChuongTrinh']; ?></h2>
                  <p><?php echo the_content($chuongtrinh['tenChuongTrinh']); ?></p>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; ?>
        </div><!--/.drop-down-ky-nang-->
      </div><!--/.ky-nang-tuyen-dung-->

      <div class="tin-tuyen-dung">
        <div class="header-tin-tuyen-dung">
          <h2>Tham Gia Cùng Chúng Tôi Ngay Bây Giờ</h2>
          <p>Các vị trí sẵn có</p>
        </div>

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
            <select name="level" id="level">
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
        <div class="table-tin-tuyen-dung">
          <table class="table">
            <thead>
              <tr>
                <th>Ngày đăng</th>
                <th>Vị trí ứng tuyển</th>
                <th>Nơi Làm Việc</th>
                <th>Chức Vụ / Chuyên Ngành</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  //lay tin tuyen dung tu database
                  $qTinTuyenDung = "
                    SELECT ttd.*, vttd.*, ntd.*
                    FROM tintuyendung ttd
                    INNER JOIN viTriTuyenDung vttd ON ttd.idviTri = vttd.idVTTDung
                    INNER JOIN nghanhtuyendung ntd ON ttd.idNghanh = ntd.idNTDung

                  ";
                  $rTinTuyenDung = mysqli_query($dbc, $qTinTuyenDung);
                  kiemtraquery($rTinTuyenDung, $qTinTuyenDung);
                  while($tins = mysqli_fetch_array($rTinTuyenDung)){
                    echo "
                    <tr>
                      <td>{$tins['ngayDang']}</td>
                      <td>{$tins['viTriTuyen']}</td>
                      <td>{$tins['noiLamViec']}</td>
                      <td>{$tins['tenVTTDung']} / {$tins['tenNTDung']}</td>
                    </tr>
                    ";
                  }

              ?>
            </tbody>
          </table>
        </div>

      </div>
    </div><!--/.container-->
  </div><!--/.content-tuyen-dung-->

  <div class="clrear" style="height: 37px;"></div>
  <?php include ("block/footer.php"); ?>
