jQuery(document).ready(function($){
$(".offcanvas-toggle").click(function (e) {
e.preventDefault();
  $(this).toggleClass('active');
});
});



jQuery(document).ready(function($){
$("#minihamburger-icon").click(function (e) {
e.preventDefault();
  $(this).toggleClass('active');
});
});



jQuery(document).ready(function($){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing');
  });
});  