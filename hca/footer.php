</main> <!-- /.site-content -->



<div id="darkness"></div>

 <footer class="p-y-md">
	<div class="container">
      <div class="row">
         <div class="col-sm-4 col-sm-offset-4 badge-1977">
            <img src="<?php echo home_url(); ?>/assets/ngi-footer-mark.png" class="img-fluid center-block" alt="Natural Gourmet Institute">
         </div> <!-- /.col-sm-4 -->
      </div> <!-- /.row -->

		<div class="row p-b-md">
			<!-- <div class="div-aligner"> -->
		  <div class="col-sm-6 footer-contact"> <!-- align-kid -->
            <p>48 W 21 Street, 2nd Floor, NYC 10010 <br>212 645 5170 <a href="mailto:info@nginyc.com">info@nginyc.com</a></p>
      </div><!-- /.col-md-4 -->

			<div class="col-sm-6 footer-social"> <!-- align-kid -->
			  <div class="cutbox">
             <p><a href="https://www.facebook.com/naturalgourmetinstitute" target="_blank"><i class="icon-facebook"></i></a> <a href="https://twitter.com/naturalgourmet" target="_blank"><i class="icon-twitter"></i></a> <a href="http://instagram.com/naturalgourmetinstitute" target="_blank"><i class="icon-instagram"></i></a><a href="http://www.pinterest.com/naturalgourmet/" target="_blank"><span class="icon-pinterest"></span></a><a href="http://www.linkedin.com/company/natural-gourmet-institute" target="_blank"><span class="icon-linkedin"></span></a></p>
             <p><a href="#mailingModal" data-toggle="modal" data-target="#mailingModal">Sign up for our Mailing List</a></p>
             <p><a href="//www.iubenda.com/privacy-policy/337201" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></p>
			  </div> <!-- /.cutbox -->
        </div><!-- /.col-sm-6 -->
		</div><!-- /.row -->
	</div> <!-- ./container -->
</footer>


<?php get_template_part('quick/modal-chimp');  ?>

<?php get_template_part('layouts/modal-share');  ?>




<script>
jQuery(document).ready(function($){
   $('.gform_footer .gform_button').addClass('btn btn-primary');
});
</script>

<script>
jQuery(document).ready(function($){
   $('a').smoothScroll({offset: -139});
});
</script>


<script>
jQuery(document).ready(function($){
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
});
</script>

<script type="text/javascript">
piAId = '294282'; piCId = '1172'; (function() { 
function async_load(){
  var s = document.createElement('script'); s.type = 'text/javascript';
  s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
  var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
  if(window.attachEvent) { window.attachEvent('onload', async_load); }
  else { window.addEventListener('load', async_load, false); } 
})();
</script> 

<script>
    //Google Analytics
    var _gaq=[['_setAccount','UA-36811537-2'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));

    //Charbeat
    var _sf_async_config={uid:28610,domain:"naturalgourmetinstitute.com",useCanonical:true};
    (function(){
      function loadChartbeat() {
        window._sf_endpt=(new Date()).getTime();
        var e = document.createElement('script');
        e.setAttribute('language', 'javascript');
        e.setAttribute('type', 'text/javascript');
        e.setAttribute('src', '//static.chartbeat.com/js/chartbeat.js');
        document.body.appendChild(e);
      }
      var oldonload = window.onload;
      window.onload = (typeof window.onload != 'function') ?
         loadChartbeat : function() { oldonload(); loadChartbeat(); };
    })();
  </script>

  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 966069732;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/966069732/?value=0&guid=ON&script=0"/>
    </div>
  </noscript>

<div id="ttdUniversalPixelTag5a2e4b81237a4d11a6267a2433577a32" style="display:none">
    <script src="https://js.adsrvr.org/up_loader.1.1.0.js" type="text/javascript"></script>
    <script type="text/javascript">
        (function(global) {
            if (typeof TTDUniversalPixelApi === 'function') {
                var universalPixelApi = new TTDUniversalPixelApi();
                universalPixelApi.init("hupr17p", ["fx0vm8d"], "https://insight.adsrvr.org/track/up", "ttdUniversalPixelTag5a2e4b81237a4d11a6267a2433577a32");
            }
        })(this);
    </script>
</div>

<?php wp_footer(); ?>

	</body>
</html>
