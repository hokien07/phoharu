<?php
  include("database/dbCon.php");
  include("function/function.php");
  include("block/header.php");
?>

<style media="screen">
  .title-about {
    text-align: center;
    padding-top: 27px;
    margin-bottom: 20px;
    font-weight: bold;
    text-decoration: none;
    text-transform: uppercase;
  }
</style>
<body>
  <?php include("block/topmenu.php"); ?>

  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
    <div class="text-center-bg-top">
      <h4>chúng tôi tin rằng</h4>
      <h2>ẩm thực là một nghệ thuật</h2>
    </div>
  </div>

  <?php
    $q = "SELECT * FROM gioithieu ORDER BY idGioiThieu DESC LIMIT 0,1";
    $r = mysqli_query($dbc, $q);
    kiemtraquery($r, $q);
    $gioithieu = mysqli_fetch_array($r);
  ?>
  <section id="tow-col" class="first single-page post">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-right">
            <div class="img-right">
              <h1 class="title-about">Sản Phẩm Của Chúng Tôi</h1>
            </div>
            <?php
              echo "<p>". the_content($gioithieu['sanPham']); "</p>";
             ?>
          </div>
        </div>

        <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-left">
            <img src="upload/about/<?php echo $gioithieu['hinh1']; ?>" alt="" class="img-responsive center-block">
          </div>
        </div>
      </div>
    </div>
  </section><!--/.first-->

  <section id="tow-col" class="second single-page post">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-right">
            <div class="img-right">
              <img src="upload/about/<?php echo $gioithieu['hinh2'] ?>" alt="hinh rau tang tret">
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-left">
              <h1 class="title-about"> Công nghệ hiện đại</h1>
            <?php
              echo "<p>". the_content($gioithieu['congThuc']); "</p>";
             ?>
          </div>
        </div>
      </div>
    </div>
  </section><!--/.second-->

  <section id="tow-col" class="threre single-page post">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="col-right">
            <h1 class="title-about"> Thị truờng rộng lớn</h1>
            <?php
              echo "<p>". the_content($gioithieu['thiTruong'])."</p>";

            ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="col-left">
            <div class="img-left">
              <img src="upload/about/<?php echo $gioithieu['hinh3'] ?>" alt="hinh ben phai haru" class="img-responsive center-block">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tow-col" class="four single-page post">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="col-right">
            <div class="img-right">
              <img src="upload/about/<?php echo $gioithieu['hinh4'] ?>" alt="hinh rau tang tret" class="img-responsive center-block">
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="col-left">
            <h1 class="title-about">Chất luợng quốc tế</h1>
            <?php
              echo "<p>". the_content($gioithieu['chatLuong']) . "</p>";
            ?>
          </div>
        </div>
      </div>
    </div>
  </section><!--/.second-->
  <?php
    include ("block/footer.php");
  ?>
