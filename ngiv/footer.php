</main> <!-- /.site-content -->




 <footer class="p-y-md">
	<div class="container">
      <div class="row">
         <div class="col-sm-4 col-sm-offset-4 badge-1977">
            <img src="<?php echo home_url(); ?>/assets/ngi-footer-mark.png" class="img-fluid center-block" alt="Natural Gourmet Institute">
         </div> <!-- /.col-sm-4 -->
      </div> <!-- /.row -->

		<div class="row">
			<!-- <div class="div-aligner"> -->
		  <div class="col-sm-6 footer-contact"> <!-- align-kid -->
            <p>48 W 21 Street, 2nd Floor, NYC 10010 <br>212 645 5170 <a href="mailto:info@nginyc.com">info@nginyc.com</a></p>
      </div><!-- /.col-md-4 -->

			<div class="col-sm-6 footer-social"> <!-- align-kid -->
			  <div class="cutbox">
             <p><a href="https://www.facebook.com/naturalgourmetinstitute" target="_blank"><i class="icon-facebook"></i></a> <a href="https://twitter.com/naturalgourmet" target="_blank"><i class="icon-twitter"></i></a> <a href="http://instagram.com/naturalgourmetinstitute" target="_blank"><i class="icon-instagram"></i></a><a href="http://www.pinterest.com/naturalgourmet/" target="_blank"><span class="icon-pinterest"></span></a><a href="http://www.linkedin.com/company/natural-gourmet-institute" target="_blank"><span class="icon-linkedin"></span></a></p>
             <p><a href="#mailingModal" data-toggle="modal" data-target="#mailingModal">Sign up for our Mailing List</a></p>
			  </div>
        </div><!-- /.col-md-4 -->
			</div> <!-- ./div-aligner -->
		</div><!-- /.row -->
	</div> <!-- ./container -->
</footer>


<?php get_template_part('quick/modal-mailing');  ?>

<?php get_template_part('quick/modal-info');  ?>




    <?php /* if (is_page( 4 )): ?>
<script type="text/javascript">
    $(window).load(function(){
        $('#ngihcaModal').modal('show');
    });
</script>

<?php endif; */ ?>


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
    var _gaq=[['_setAccount','UA-36811537-1'],['_trackPageview']];
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

<?php wp_footer(); ?>

	</body>
</html>
