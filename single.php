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
        <?php
          if(isset($_GET['id'], $_GET['loaitin'])) {
            $id = $_GET['id'];
            $loaitin = $_GET['loaitin'];
            //lay du lieu tu database.
            $q = "
              SELECT * FROM {$loaitin} WHERE id_tintuc = {$id}
            ";
            $r = mysqli_query($dbc, $q);
            kiemtraquery($r, $q);
            $tin = mysqli_fetch_array($r);
          }

        ?>
        <h2 class="title-single"><?php echo $tin['tieude'] ?></h2>
      </div>
      <div class="content-single" style="margin: 20px auto; width: 70%; background-color: #fff; padding: 10px;">
        <img src="upload/tin-tuc/<?php echo $tin['urlhinh'] ?>" alt="<?php echo $tin['tieude'] ?>" class="img-responsive center-block" style="width: 100%; height: auto;">
        <?php echo the_content($tin['mota']); ?>
      </div>
    </div>
  </div>
</div>
</div>
</div><!--/.content-hoptac-->
<div class="clrear" style="height: 37px;"></div>
<?php include ("block/footer.php"); ?>
