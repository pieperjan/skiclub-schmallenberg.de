$(document).ready(function() {
   
    $('.mobile-click-event').on('click', function() {
        $('body').removeClass('nav-open');
        $('.navbar-collapse').removeClass('show');
        $('.navbar-toggler').addClass('collapsed');
    });

    $('.navbar-toggler').on('click', function() {
        $('body').toggleClass('nav-open');
    });
});



var lastScrollTop = 0;
$(window).scroll(function(event){
  var st = $(this).scrollTop();
  if (st > lastScrollTop){
        $(".wrap-anfrage").addClass('fadeout');
   } else {
    $(".wrap-anfrage").removeClass('fadeout');
   }

   lastScrollTop = st;

   if ($(this).scrollTop() <= 0) {
     $('body').removeClass('down');
   };
});
