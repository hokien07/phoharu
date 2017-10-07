<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="hokien07.net">
  <link rel="icon" href="favicon.ico">
  <title>Phở Haru</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!--Main Style-->
  <link href="style.css" rel="stylesheet">
  <link href="css/ninja-slider.css" rel="stylesheet">

</head>

<body>
  <header>
    <nav>
      <ul class="top-header">
        <li class="home first active"><a href="#">HOME</a></li>
        <li class="about"><a href="#">ABOUT</a></li>
        <li class="investor"><a href="#">INVESTOR</a></li>
        <li class="partnership"><a href="#">PARTNERSHIP</a></li>
        <li class="people"><a href="#">PEOPLE</a></li>
        <li class="career"><a href="#">CAREER</a></li>
        <li class="contact last"><a href="#">CONTACT</a></li>
      </ul>
    </nav>
  </header>
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
