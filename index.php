<?php include ("database/dbCon.php"); ?>
<?php include ("function/function.php"); ?>
<?php include ("block/header.php"); ?>
<body>
  <?php include ("block/topmenu.php"); ?>
    <div class="bg-top">
      <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
      <div class="text-center-bg-top">
        <h2>atisfying Tastes & Appetites Around The World</h2>
        <h4>WE BELIEVE IN THE POWER AND PROMISE THAT COMES FROM EATING SUMPTUOUS FOOD.</h4>
      </div>
    </div>

    <?php
      $q = "
          SELECT * FROM trangchu ORDER BY idTchu DESC LIMIT 0,1
      ";
      $r = mysqli_query($dbc, $q);
      $trangchu = mysqli_fetch_array($r);
    ?>
  <section id="tow-col" class="first ">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-right wow slideInLeft">
            <div class="img-right">
            <img src="upload/trangchu/<?php echo $trangchu['banner1'] ?>" class="img-responsive center-block">
            </div>
          </div>
        </div>

        <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-left wow slideInRight">
            <?php
                echo "<p>" . the_content($trangchu['gioiThieuNgan']).  "</p>"
            ?>
            <a href="gioithieu.php" class="more">chi tiết</a>
          </div>
        </div>
      </div>
    </div>
  </section><!--/.first-->

  <section id="breand">
    <div class="container-fuild">
      <h2>Danh mục thương hiệu</h2>
      <?php
            echo "<p>" . the_content($trangchu['thongTinDoiTac']).  "</p>"
        ?>
      <div class="breand-list">
        <div class="container">
          <div class="row">
            <?php
                $qBreand = "
                  SELECT * FROM breand
                ";
                $rBreand = mysqli_query($dbc, $qBreand);
                while($breand = mysqli_fetch_array($rBreand)):
            ?>
            <div class="col-md-3 col-sm-6">
              <div class="breand-items">
                <img src="upload/breand/<?php echo $breand['hinhDoiTac'] ?>" alt="logo doi tac pho haru 1" class="img-responsive">
                <div class="breand-hover">
                  <h4><a href="#"><?php echo $breand['thongTinDoiTac'] ?></a></h4>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /.breand -->

  <section id="tow-col" class="second">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-right">
            <div class="img-right wow slideInLeft">
              <img src="upload/trangchu/<?php echo $trangchu['banner2'] ?>" class="img-responsive center-block">
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-left wow slideInRight">
            <?php
                  echo "<p>{$trangchu['moataHoatDong']} </p>"
              ?>
            <a href="thuvien.php" class="more">chi tiết</a>
          </div>
        </div>
      </div>
    </div>
  </section><!--/.second-->

  <section id="tow-col" class="threre">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="col-right wow slideInLeft">
            <?php
                echo "<p>" . the_content($trangchu['tamNhinChienLuoc']).  "</p>"
              ?>
            <a href="hoptac.php" class="more">chi tiết</a>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="col-left">
            <div class="img-left wow slideInRight">
              <img src="upload/trangchu/<?php echo $trangchu['banner3'] ?>" class="img-responsive center-block">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tow-col" class="second four">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="col-right">
            <div class="img-right wow slideInLeft">
              <img src="upload/trangchu/<?php echo $trangchu['banner4'] ?>" class="img-responsive center-block">
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="col-left wow slideInRight">
            <?php
                echo "<p>" . the_content($trangchu['choDoLamViec']).  "</p>"

            ?>
            <a href="tintuc.php" class="more">chi tiết</a>
          </div>
        </div>
      </div>
    </div>
  </section><!--/.second-->

  <section id="tow-col" class="threre five">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="col-right wow slideInLeft">
            <?php
                echo "<p>" . the_content($trangchu['taiSaoChon']).  "</p>"

            ?>
            <a href="tuyendung.php" class="more">chi tiết</a>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="col-left wow slideInRight">
            <div class="img-left">
              <img src="upload/trangchu/<?php echo $trangchu['banner5'] ?>" class="img-responsive center-block">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include ("block/footer.php"); ?>
