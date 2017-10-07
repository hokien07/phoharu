<footer id="footer" class="single-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="col-footer-left">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <h3>about</h3>
              <ul>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6">
              <h3>about</h3>
              <ul>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6">
              <h3>about</h3>
              <ul>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
                <li><a href="#">Our Milestones</a></li>
              </ul>
            </div>
          </div>
        </div><!--/.footer-left-->
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="col-footer-right">
          <h3>Our Brands</h3>
          <a href="#">  Carl's Jr</a>
        </div><!--/.col-footer-right-->
      </div>
    </div>
  </div>
  <div class="copy-right">
    <p>Copyright © 2017 BreadTalk Group Limited. All Rights Reserved.</p>
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
</body>
</html>
