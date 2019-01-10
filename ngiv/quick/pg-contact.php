<iframe src="https://snazzymaps.com/embed/125048" width="100%" height="200px" class="snazzymap" style="border:none;"></iframe>

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
			
			<h4>New Natural Gourmet Center</h4>
			<p>Institute of Culinary Education<br />
			225 Liberty Street, 3rd Floor<br />
			New York, NY 10281<br />
				Phone: <a href="tel://1-888-574-2433">+888 574 CHEF</a><br /></p>
			
			<p><a href="https://www.google.com/maps/dir/?api=1&destination=Institute+Of+Culinary+Education&query_place_id=ChIJlZ4CYqRZwokRLhHy9V0ml0c" target="_blank" class="btn-text">Get directions <span class="icon-arrow-right"></span></a></p>
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




<style type="text/css">
	@media (min-width: 544px) {
  .snazzymap {
    height: 400px;
	  margin-bottom: 30px;
  }
}
</style>
