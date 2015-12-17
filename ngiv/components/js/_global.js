
jQuery('#full-width-slider').royalSlider({
  arrowsNav: true,
  randomizeSlides: true,          // Randomizing slides is on... just FYI
  loopRewind: true,
  keyboardNavEnabled: true,
  controlsInside: true,
  imageScaleMode: 'fill',
  arrowsNavAutoHide: false,
  arrowsNavHideOnTouch: true,
  autoScaleSlider: true, 
  autoScaleSliderWidth: 960,     
  autoScaleSliderHeight: 550,
  controlNavigation: 'none',
  thumbsFitInViewport: false, 
  navigateByClick: false,
  startSlideId: 0,
  transitionType:'move',
  transitionSpeed: 400,
  easeInOut: 'easeInOutSine',
  globalCaption: false,
  addActiveClass: true,
  deeplinking: {
    enabled: true,
    change: false
  },
  autoPlay: {
        // autoplay options go gere
        enabled: false,
        pauseOnHover: true,
        delay: 10000
  },
  /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
  imgWidth: 1600,
  imgHeight: 700
});
 





// jQuery('.the-subnav').localScroll({
//    offset:{top: -2},
// });


// jQuery('.certificate-subnav').localScroll({
//    offset:{top: -102},
// });

// jQuery('.learnmore').localScroll({
//    offset:{top: -102},
// });

// jQuery('[data-spy="scroll"]').each(function () {
//   var $spy = $(this).scrollspy('refresh')
// })



// jQuery(document).on("scroll", function(){
//     if($(document).scrollTop() > 100){
//       $("#reg-header").addClass("smaller");
//       updateSliderMargin();
//     }
//     else
//     {
//       $("#reg-header").removeClass("smaller");
//       updateSliderMargin();
//     }
//   });

// jQuery(document).on("scroll", function(){
//     if($(document).scrollTop() > 300){
//       $(".the-subnav").addClass("clung");
//       updateSliderMargin();
//     }
//     else
//     {
//       $(".the-subnav").removeClass("clung");
//       updateSliderMargin();
//     }
//   });




// jQuery(window).scroll(function () {
//   if ($(document).scrollTop() == 0) {
//     $('#reg-header').removeClass('smaller');
//   } else {
//     $('#reg-header').addClass('smaller');
//   }
// });




// jQuery(function(){
//   $('#reg-header').data('size','big');
// });

// $(window).scroll(function(){
//   if($(document).scrollTop() > 0)
// {
//     if($('#reg-header').data('size') == 'big')
//     {
//         $('#reg-header').data('size','smaller');
//         $('#reg-header').stop().animate({
//             height:'60px'
//         },600);
//     }
// }
// else
//   {
//     if($('#reg-header').data('size') == 'smaller')
//       {
//         $('#reg-header').data('size','big');
//         $('#reg-header').stop().animate({
//             height:'100px'
//         },600);
//       }  
//   }
// });













// This is for toggle symbols on panels.

    // jQuery('#collapseDiv').on('shown.bs.collapse', function () {
    //    $(".glyphicon").removeClass("glyphicon-folder-close").addClass("glyphicon-folder-open");
    // });

    // jQuery('#collapseDiv').on('hidden.bs.collapse', function () {
    //    $(".glyphicon").removeClass("glyphicon-folder-open").addClass("glyphicon-folder-close");
    // });







// THIS IS WHEN YOU STOP GOING BACKWARDS


    // vpw = $(window).width();
    // vph = $(window).height();

    // jQuery('.full-page').height(vph);



  // jQuery("#jumbo-header h1").fitText();



// jQuery('#infoModal').modal()




    // var feed = new Instafeed({
    //   get: 'user',
    //   userId: 487638934,
    //     accessToken: '487638934.467ede5.b758c4654cad4f308abfffe29e31760d',
    //   link: 'true',
    //   clientId: '248fb38e152a4886b0a0d451ad0b33ef',
    //   resolution: 'standard_resolution',
    //   limit: '7',
    //    template: '<a href="{{link}}" target="_blank" class="nginstagram img-responsive"><img src="{{image}}" /><div class="content"><div class="caption">{{caption}}</div><div class="meta">{{location}}</div></div></a>'
    //   });
    //   feed.run();



//   jQuery(document).ready(function($){

//     setTimeout(function(){
//       $('.nav-logo').fadeIn('slow');
//     }, 200);

//     responsiveLogoSprite();

//     var firedSm = false;
//     var firedLg = false;

//     /**
//      * Recalculate the logo sprite dimensions on scroll
//      */
//     $(window).on('scroll touchmove', function(){
//       var distanceY = window.pageYOffset || document.documentElement.scrollTop;

//       if (distanceY > 300 && !firedSm) {
//         $('.nav-logo').removeAttr('style');
//         responsiveLogoSprite();
//         firedSm = true;
//         firedLg = false;
//       }else if(distanceY <= 300 && !firedLg){
//         $('.nav-logo').removeAttr('style');
//         responsiveLogoSprite();
//         firedLg = true;
//         firedSm = false;
//       }
//     });

//   });

//   /**
//    * Recalculate the logo sprite dimensions so that it is responsive to its container
//    */
//   var responsiveLogoSprite = function(){

//     // Cache elements
//     var $navLogo = $('.nav-logo');

//     // Cache dimensions
//     var parentHeight = $navLogo.parent('a').height();
//     var parentWidth = $navLogo.parent('a').width();
//     var logoHeight = $navLogo.height();
//     var logoWidth = $navLogo.width();

//     var heightFactor = parentHeight / logoHeight;
//     var widthFactor = parentWidth / logoWidth;

//     var factor = (heightFactor > widthFactor) ? widthFactor : heightFactor;

//     // Get background-size
//     var bgSize = $navLogo.css('background-size');
//     var bgSizeArr = bgSize.split(' ');
//     var bgSizeX = parseInt(bgSizeArr[0]);
//     var bgSizeY = parseInt(bgSizeArr[1]);

//     // Get background-position
//     var bgPos = $navLogo.css('background-position');
//     var bgPosArr = bgPos.split(' ');
//     var bgPosX = parseInt(bgPosArr[0]);
//     var bgPosY = parseInt(bgPosArr[1]);

//     // Set background-size
//     var newBGSize = (bgSizeX * factor).toFixed(3) + 'px ' + (bgSizeY * factor).toFixed(3) + 'px';
//     $navLogo.css('background-size', newBGSize);

//     // Set background-position
//     var newBGPos = (bgPosX * factor).toFixed(3) + 'px ' + (bgPosY * factor).toFixed(3) + 'px';
//     $navLogo.css('background-position', newBGPos);

//     // Alter height or width depending on the factor used
//     if(heightFactor > widthFactor){
//       logoHeight = Math.ceil(logoHeight * widthFactor);
//     }else{
//       logoWidth = Math.ceil(logoWidth * heightFactor);
//     }

//     // Set height and width
//     $navLogo.css({'height': parentHeight, 'width': parentWidth, 'max-height': logoHeight, 'max-width': logoWidth});

//   }

// ;