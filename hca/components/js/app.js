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


jQuery(document).ready(function($) {
$('#the-dropper').on('show.bs.collapse', function (e) {
    $('#darkness').fadeTo(200, 1);
})
$('#the-dropper').on('hidden.bs.collapse', function (e) {
    $('#darkness').fadeTo(200, 0);
})
});



// jQuery(document).ready(function($) {
// $('#the-dropper').on('shown.bs.collapse')(function(){
//     $('#darkness').fadeTo(200, 1);
// }, function(){
//     $('#the-dropper').on('shown.bs.collapse')(function(){
//         $(this).hide();
//     });
// });
// });



// jQuery(document).ready(function($) {


// function toggleArrow(e) {
//     $(e.target)
//         .prev('.nav-item')
//         .find('span')
//         .toggleClass('icon-arrow-down icon-arrow-up');
// }
// $('#the-dropper').on('hidden.bs.collapse', toggleArrow);
// $('#the-dropper').on('shown.bs.collapse', toggleArrow);

// });
