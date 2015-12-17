<div class="google_map" id="map-canvas"></div>

<div class="container">
	<div class="row">
		<div class="col-md-4 trailer hidden-sm">
			<h4>The Institute</h4>
			<p>48 West 21st Street, 2nd Floor<br>
			New York, NY 10010<br>
			<a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#105;&#110;&#102;&#111;&#064;&#110;&#103;&#105;&#110;&#121;&#099;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#110;&#103;&#105;&#110;&#121;&#099;&#046;&#099;&#111;&#109;</a><br>
			Phone: +212 645 5170<br>
			Fax: +212 989 1493<br></p>
			<p><a href="https://www.google.com/maps/dir//Natural+Gourmet+Institute,+48+W+21st+St+%232,+New+York,+NY+10010" target="_blank" class="btn-text">Get directions <span class="icon-arrow-right"></span></a></p>
			<p><a href="#" name="SOBookingLink" data-page="NaturalGourmetInstitute" onclick="soe.toggleLightBox('NaturalGourmetInstitute')"><input type="button" value="Speak with Admissions" style="background-color:rgb(108, 164, 56);color:rgb(0, 0, 0);border-radius:6px;-webkit-appearance: none; font-size:14px;font-weight:bold;padding:10px 20px;cursor:pointer;"/></a><div id="SOLightBoxNaturalGourmetInstitute" name="SOLightBox" style="top:-10000px;position:fixed; padding:0px; margin:0px;"><div id="SOInnerLightBox"><div align="center" style="height:100%; padding-top: 15px; padding-right: 10px; box-sizing: border-box; overflow: hidden;"><div id="SOIC_NaturalGourmetInstitute" style="padding: 0px; margin: 0px; width: 24px;height: 24px; background-color: #000; border: solid 2px #FFF;color:#FFF;font-size: 18px;font-weight: bold;font-family: tahoma; -webkit-border-radius: 14px; border-radius: 14px; position: absolute; top: 0px; text-align:center; line-height:23px;cursor:pointer;box-sizing:content-box;right:-17px;" onclick="soe.toggleLightBox('NaturalGourmetInstitute')">X</div><iframe src="//secure.scheduleonce.com/NaturalGourmetInstitute&thm=white?bc=6CA438&tc=000000&dt=&em=1" id="SOI_NaturalGourmetInstitute" name="ScheduleOnceIframe" data-mysrc="" scrolling="no" frameborder="0" hspace="0" marginheight="0" marginwidth="0" height="535px" width="100%" vspace="0" style="width:100%;height:535px;border-radius: 7px;-webkit-border-radius:7px;min-width:769px;border:solid 3px #FFF;background-color:#FFF;"></iframe></div></div></div><script type="text/javascript" src="//secure.scheduleonce.com/mergedjs/ScheduleOnceEmbed.js"></script><script type="text/javascript">soe.AddEventListners();</script></p>

		</div> <!-- /col-md-4 -->

		<div class="col-md-8 trailer">
			<h4>Drop us a line</h4>
				<?php echo do_shortcode('[gravityform id="6" name="Contact Us" title="false" description="false"]') ?>
		</div>
	</div> <!-- /.row -->
</div><!-- /.container -->

<div id="instafeed"></div>


<script src="<?php bloginfo('template_url'); ?>/components/js/instafeed.min.js"></script>

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
