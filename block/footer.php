<footer id="footer" class="single-page">

    <div class="row">
      <div class="col-lg-4 col-md-4">
        <h3>Giới thiệu</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more</p>
      </div>

      <div class="col-lg-4">
          <h3>Facebook</h3>
          <div class="fb-page" data-href="https://www.facebook.com/phoharu/" data-tabs="timeline" data-width="321" data-height="203" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/phoharu/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/phoharu/">Phở Haru</a></blockquote></div>
      </div>
      <div class="col-lg-4 col-md-4">
          <h3>Đối Tác</h3>
          <?php
              $q = "SELECT thongTinDoiTac FROM breand";
              $r = mysqli_query($dbc, $q);
              while ($dt = mysqli_fetch_array($r)) {
                echo "<a href='#'>{$dt['thongTinDoiTac']}</a> <br/>";
              }
          ?>

      </div>
    </div>

  <div class="copy-right">
    <p>PhoHaru © 2015. Developed by 007Group . All Rights Reserved.</p>
    <a href="#">Privacy Policy</a>
  </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom-dropdown.js"></script>
<script src="js/ninja-slider.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="js/viewportchecker.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function() {
  	jQuery('.post').addClass("hidden").viewportChecker({
  	    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
  	    offset: 100
  	   });
  });
</script>
<script>
function lightbox(idx) {
  //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
  var ninjaSldr = document.getElementById("ninja-slider");
  ninjaSldr.parentNode.style.display = "block";

  nslider.init(idx);

  var fsBtn = document.getElementById("fsBtn");
  fsBtn.click();
}

function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
  if (isFullscreen) {
    var ninjaSldr = document.getElementById("ninja-slider");
    ninjaSldr.parentNode.style.display = "none";
  }
}
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=153110658616082";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
