$(document).ready(function(){
  $('.nav-item').on('mouseenter', function(){
    $(this).addClass('animated fadeIn');
  }).on('mouseleave', function(){
    $(this).removeClass('animated fadeIn');
  });

  $("li>a").on('click', function(){
    var target = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(target).offset().top-50
    }, 500);
    $(this).parent().siblings().removeClass('active');
    $(this).parent().addClass('active');
  });

  $(document).on('scroll', function(){
    var currentPosition = $(document).scrollTop()+100;

    $('.nav-item').removeClass('active')

    $('li.nav-item>a').each(function(){
      var targetID = $(this).attr('href');
      var targetIDPosition = $(targetID).position().top;
      // if (targetIDPosition < currentPosition ){
      //   $(this).parent().removeClass('active');
      // }
      if ((currentPosition > targetIDPosition) && (currentPosition < targetIDPosition + $(targetID).outerHeight())){
        $(this).parent().addClass('active');
      }
    });

  });

});

// function onScroll(event){
//   var scrollPos = $(document).scrollTop();
//   $('.nav-item a[href*=#]:not([href=#])').each(function(){
//     var currLink = $(this);
//     var refElement = $(currLink.attr("href"));
//     if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
//       $('.nav-item').removeClass("active");
//       currLink.addClass("active");
//     } else {
//       currLink.removeClass("active")
//     }
//   });
// }
