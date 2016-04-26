<div class="google_map" id="map-canvas"></div>

<div class="container">
	<div class="row">
		<div class="col-md-4 trailer hidden-sm contact-info">
			<h4>The Institute</h4>
			<p>48 West 21st Street, 2nd Floor<br>
			New York, NY 10010<br>
			<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#105;&#110;&#102;&#111;&#064;&#110;&#103;&#105;&#110;&#121;&#099;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#110;&#103;&#105;&#110;&#121;&#099;&#046;&#099;&#111;&#109;</a><br>
			Phone: <a href="tel://1-212-645-5170">+212 645 5170</a><br>
			Fax: <a href="tel://1-212-989-1493">+212 989 1493</a><br></p>
			<p><a href="https://www.google.com/maps/dir//Natural+Gourmet+Institute,+48+W+21st+St+%232,+New+York,+NY+10010" target="_blank" class="btn-text">Get directions <span class="icon-arrow-right"></span></a></p>
		</div> <!-- /col-md-4 -->
	
		<div class="col-md-8 trailer">
			<h4>Drop us a line</h4>
				<?php echo do_shortcode('[gravityform id="6" name="Contact Us" title="false" description="false"]') ?>			
		</div>	
	</div> <!-- /.row -->
</div><!-- /.container -->

<div id="instafeed"></div>


<script src="<?php bloginfo('template_url'); ?>/assets/js/instafeed.min.js"></script>

<script type="text/javascript">
    var feed = new Instafeed({
      get: 'user',
      userId: 487638934,
        accessToken: '487638934.467ede5.bfd3ad67d845455f94b347664250266f',
      link: 'true',
      clientId: '248fb38e152a4886b0a0d451ad0b33ef',
      resolution: 'standard_resolution',
      limit: '7',
       template: '<a href="{{link}}" target="_blank" class="nginstagram img-responsive"><img src="{{image}}" /><div class="content"><div class="caption">{{caption}}</div><div class="meta">{{location}}</div></div></a>'
      });
      feed.run();
</script>


<script type="text/javascript"
	  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc1Ta2rn1t0V2TQEdoIRGtKccEWwI9k9A">
</script>
<script type="text/javascript">
  function initialize() {
	  var myLatlng = new google.maps.LatLng(40.741004, -73.992914);
	var mapOptions = {
	  center: myLatlng,
	  zoom: 15,
	  disableDefaultUI: true,
	  zoomControl: true,
	zoomControlOptions: {
	  style: google.maps.ZoomControlStyle.SMALL
	},
	scrollwheel: false,
	styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"off"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"hue":"#acb1b1"},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),
		mapOptions);
	var iconBase = '/assets/';
	var marker = new google.maps.Marker({
	  position: myLatlng,
	  map: map,
	  title: 'Hello World!',
	  icon: iconBase + 'ngi-marker.png'
  });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>