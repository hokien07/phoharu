<?php
  include("block/header.php");
  include("database/dbCon.php");
  include("function/function.php");
?>

<body>
  <?php include ("block/topmenu.php"); ?>

  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
  </div>

<div class="clrear" style="height: 40px;"></div>

  <div class="content-hoptac">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-hoptac">
            <h2>Thương Hiệu Và Đối Tác</h2>
          </div>
        </div>

        <?php
          $q = "SELECT * FROM hoptac";
          $r = mysqli_query($dbc, $q);
          while($hotacs = mysqli_fetch_array($r)):
        ?>
        <div class="col-md-12">
          <div class="thong-tin-hop-tac">
            <h2><?php echo $hoptac['tenTieuDe'] ?></h2>
            <?php echo "<p>". the_content($hoptac[noiDungTieuDe])  ."</p>" ?>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </div><!--/.content-hoptac-->
<div class="clrear" style="height: 100px;"></div>
<?php include ("block/footer.php"); ?>
