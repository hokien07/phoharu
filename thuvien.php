<?php
  include("database/dbCon.php");
  include("block/header.php");
?>

<body>
  <?php include ("block/topmenu.php"); ?>

  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
  </div>
  <div class="container">
    <!--start-->
    <div style="display:none;">
      <div id="ninja-slider">
        <div class="slider-inner">
          <ul>
            <?php
              $q = "SELECT * FROM hinhanh";
              $r = mysqli_query($dbc, $q);
              while ($hinh = mysqli_fetch_array($r)):
            ?>
            <li>
              <a class="ns-img" href="upload/thu-vien/<?php echo $hinh['urlHinh']; ?>"></a>
              <div class="caption">
                <h3><?php echo $hinh['tieuDeHinh']; ?></h3>
                <p><?php echo $hinh['moTaHinh']; ?></p>
              </div>
            </li>
          <?php endwhile; ?>
          </ul>
          <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
        </div>
      </div>
    </div>

    <h2 class="title-thu-vien">Hình Ảnh Về Chúng Tôi</h2>
    <br /><br />
    <div class="gallery">
      <div class="row">
        <?php
          $q = "SELECT * FROM hinhanh";
          $r = mysqli_query($dbc, $q);
          $count = 0;
          while ($hinh = mysqli_fetch_array($r)):
        ?>
        <div class="col-md-4">
          <img src="upload/thu-vien/<?php echo $hinh['urlHinh']; ?>" onclick="lightbox(<?php echo $count?>)" height="245px"/>
        </div>
          <?php $count++; endwhile; ?>
      </div>
    </div>
  </div><!--/.container-->
  <div class="clrear" style="height: 37px;"></div>
<?php include ("block/footer.php"); ?>
