<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">

      <!-- Social Links -->
      <div class="col-sm">
        <div id="map"></div>
      </div>
      <!-- End Social Links -->

      <!-- Office Information -->
      <div class="col-sm" id="office-info">
        <h5>Office Information</h5>
        <div class="row">
          <i class="fa fa-map-marker col-1" aria-hidden="true"></i>
          <p class="col-9">3203 e 6th st Southwest, Fort Myers, FL 33972</p>
        </div>
        <div>
          <i class="fa fa-phone" aria-hidden="true"></i>
          <p>(239)-200-2373</p>
        </div>
        <div>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <p>djjean85@gmail.com</p>
        </div>
      </div>
      <!-- End Office Information -->

      <!-- Contact Form -->
      <div class="col-sm container" >
        <form class="row">
            <input class="col-12" type="text" name="name" id="name" placeholder="Name">
            <input class="col-sm-6" type="email" name="email" id="email" placeholder="Email">
            <input class="col-sm-6 ml-auto" type="tel" name="phone" placeholder="Phone">
            <textarea placeholder="Talk to Us" class="col-12"></textarea>
            <input type="submit" class=".btn" name="" value="Submit">
        </form>
      </div>
      <!-- End Contact Form -->
    </div>
  </div>
  <p id="copyright">Perfect Solutions Roofing 2017&copy; created by <a href="jeanvillalobos.me">Jean Villalobos</a></p>
  <?php wp_footer(); ?>
</footer>
<!-- End Footer -->
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
  function initMap() {
    var uluru = {lat: 25.8100321, lng: -80.2360589};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGWtW45JrxxhVCyHSfsyGW-B48fM4evww&callback=initMap">
</script>
</body>
</html>
