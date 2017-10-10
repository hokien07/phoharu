<?php include("database/dbCon.php");?>
<?php include ("block/header.php"); ?>

<body>
  <?php include ("block/topmenu.php"); ?>

  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
  </div>
  <div class="content-tin-tuc">
    <div class="container">
      <div class="header-tin-tuc">
        <h2>Corporate Social Responsibility</h2>
        <p>At the BreadTalk Group, we believe in giving back to the communities that we are a part of. We do our bit in supporting causes closest to our hearts, such as developing the local arts and culture scene, nurturing our next generation and supporting the local communities.</p>
      </div>

      <hr class="style18">

      <div class="row">
        <?php
        $q = "
        SELECT * FROM tintuc;
        ";
        $r = mysqli_query($dbc, $q);
        ?>

        <?php while ($tin = mysqli_fetch_array($r)):?>
          <div class="col-md-3">
            <div class="tin-tuc">
              <img src="upload/tin-tuc/<?php echo $tin['urlhinh'] ?>" alt="<?php echo $tin['tieude'] ?>" class="img-responsive center-block">
              <div class="tin-tuc-meta">
                <h4 class="title-tin-tuc"><?php echo $tin['tieude'] ?></h4>
                <p><?php echo $tin['mota'] ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
</div>
</div><!--/.content-hoptac-->
<div class="clrear" style="height: 37px;"></div>
<?php include ("block/footer.php"); ?>
