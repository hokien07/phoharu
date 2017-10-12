<?php include("database/dbCon.php");?>
<?php include("function/function.php");?>
<?php include ("block/header.php"); ?>

<body>
  <?php include ("block/topmenu.php"); ?>

  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
  </div>
  <div class="content-tin-tuc">
    <div class="container">
      <div class="header-tin-tuc">
        <h2>Tổng Hợp Những Tin Mới Nhất Về Ẩm Thực</h2>
      </div>

      <hr class="style18">

      <div class="row">
        <?php
        $q = "
        SELECT * FROM tintuc ORDER BY id_tintuc DESC LIMIT 0, 20;
        ";
        $r = mysqli_query($dbc, $q);
        kiemtraquery($r, $q);
        while ($tin = mysqli_fetch_array($r)):
      ?>

          <div class="col-md-3">
            <div class="tin-tuc">
              <a href="single.php?loaitin=tintuc&id=<?php echo $tin['id_tintuc'] ?>"><img src="upload/tin-tuc/<?php echo $tin['urlhinh'] ?>" alt="<?php echo $tin['tieude'] ?>" class="img-responsive center-block"></a>
              <div class="tin-tuc-meta">
                <h4 class="title-tin-tuc"><a href="single.php?loaitin=tintuc&id=<?php echo $tin['id_tintuc'] ?>"><?php echo the_excerpt($tin['tieude'], 100);  ?></a> </h4>
                <p>
                  <?php  echo the_content(the_excerpt($tin['mota'], 200)); ?>
                </p>
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
