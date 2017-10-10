<?php include ("block/header.php"); ?>

<body>
  <?php include ("block/topmenu.php"); ?>


  <div class="bg-top">
    <img src="upload/cho-thue-phong-hop-quan-1-quan-3-1.jpg" alt="phở haru" class="img-responsive center-block">
  </div>

  <div class="container animated fadeIn lien-he">
    <h1 class="header-title">Liên hệ</h1>
    <hr>
    <div class="row">
      <div class="col-md-6">
          <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaY32Qm3KWTkRuOnKfoIVZws&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY" allowfullscreen></iframe>
        </div>
      <div class="col-md-6">

          <form action="form.php" class="contact-form" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="nm" placeholder="Tên bạn" required="" autofocus="">
            </div>
            <div class="form-group form_left">
              <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phone" maxlength="10" placeholder=" Số điện thoại" required="">
            </div>
            <div class="form-group">
              <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Phản hồi cho chúng tôi" required=""></textarea>
              <br>
              <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span>Gửi cho chúng tôi</button>
            </div>
          </form>

        </div>
    <div class="container second-portion">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
              <div class="info">
                <h3 class="title">MAIL & WEBSITE</h3>
                <p>
                  <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
                  <br>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
                </p>

              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
              <div class="info">
                <h3 class="title">HOTLINE</h3>
                <p>
                  <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
                  <br>
                  <br>
                  <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-7567065254
                </p>
              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="info">
                <h3 class="title">ĐỊA CHỈ</h3>
                <p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot
                  "Shree Krishna Krupa", Rajkot - 360001.
                </p>
              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>
        <!-- /Boxes de Acoes -->
      </div>
    </div>
  </div>
</div>

<div class="clrear" style="height: 37px;"></div>
<?php include ("block/footer.php"); ?>
