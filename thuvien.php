<?php include ("header.php"); ?>

<body>
  <?php include ("topmenu.php"); ?>

  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
  </div>
  <div class="container">
    <!--start-->
    <div style="display:none;">
      <div id="ninja-slider">
        <div class="slider-inner">
          <ul>
            <li>
              <a class="ns-img" href="upload/thu-vien/hinh1.jpg"></a>
              <div class="caption">
                <h3>Dummy Caption 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan purus.</p>
              </div>
            </li>
            <li>
              <a class="ns-img" href="upload/thu-vien/hinh2.jpg"></a>
              <div class="caption">
                <h3>Dummy Caption 2</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
              </div>
            </li>
            <li>
              <a class="ns-img" href="upload/thu-vien/hinh3.jpg"></a>
              <div class="caption">
                <h3>Dummy Caption 4</h3>
                <p>Quisque semper dolor sed neque consequat scelerisque at sed ex. Nam gravida massa.</p>
              </div>
            </li>
            <li>
              <a class="ns-img" href="upload/thu-vien/hinh4.jpg"></a>
              <div class="caption">
                <h3>Dummy Caption 5</h3>
                <p>Proin non dui at metus suscipit bibendum.</p>
              </div>
            </li>
          </ul>
          <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
        </div>
      </div>
    </div>

    <h2 class="title-thu-vien">Hình Ảnh Về Chúng Tôi</h2>
    <br /><br />
    <div class="gallery">
      <div class="row">
        <div class="col-md-4">
          <img src="upload/thu-vien/hinh1.jpg" onclick="lightbox(0)" height="245px"/>
        </div>
        <div class="col-md-4">
          <img src="upload/thu-vien/hinh2.jpg" onclick="lightbox(1)" height="245px"/>
        </div>
        <div class="col-md-4">
          <img src="upload/thu-vien/hinh3.jpg" onclick="lightbox(2)" height="245px"/>
        </div>
        <div class="col-md-4">
          <img src="upload/thu-vien/hinh4.jpg" onclick="lightbox(3)" height="245px"/>
        </div>
      </div>
    </div>
  </div><!--/.container-->
  <div class="clrear" style="height: 37px;"></div>
<?php include ("footer.php"); ?>
