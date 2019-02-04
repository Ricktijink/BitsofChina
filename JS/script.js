$(document).ready(function() {

   var owl = $("#owl-demo");

   owl.owlCarousel({
      // items: 5, //10 items above 1000px browser width
      itemsDesktop: [1800, 4], //5 items between 1000px and 901px
      itemsDesktopSmall: [1575, 3], // betweem 900px and 601px
      itemsTablet: [1366, 5], //2 items between 600 and 0
      itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
      autoWidth:false,
      autoHeight:false,
      margin: 10,
      autoPlay: 4000
   });

   // Custom Navigation Events
   $(".next").click(function() {
      owl.trigger('owl.next');
   })
   $(".prev").click(function() {
      owl.trigger('owl.prev');
   })
   $(".play").click(function() {
      owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
   })
   $(".stop").click(function() {
      owl.trigger('owl.stop');
   })

});

// When the user scrolls down 20px from the top of the document, show Go to top button
window.onscroll = function() {
   scrollFunction()
};

function scrollFunction() {
   if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      document.getElementById("myBtn").style.display = "block";
   } else {
      document.getElementById("myBtn").style.display = "none";
   }
}

// When the user clicks on the button, scroll to the top of the document
$('#myBtn').each(function(){
    $(this).click(function(){
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});

$(document).ready(function() {
   var userFeed = new Instafeed({
      get: 'user',
      userId: '2148641988',
      limit: 9,
      resolution: 'standard_resolution',
      accessToken: '2148641988.1677ed0.9b5e8502b69149cfbff86490caee46b5',
      sortBy: 'most-recent',
      template: '<div class="instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
   });
   userFeed.run();
});

// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  gutter: 20,
  horizontalOrder: true,
  columnWidth: '.grid-sizer'
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});

// TEEEEESSST categories
$(document).ready(function(){
    var $btns = $('.categoryBTN').click(function() {
        if (this.id == 'all') {
          $('.grid > .grid-item').fadeIn(450);
        } else {
          var $el = $('.' + this.id).fadeIn(450);
          $('.grid > .grid-item').not($el).hide();
        }
        // $(document).load(function(){ $('#grid').masonry(); });
        $btns.removeClass('on');
        $(this).addClass('on');

        $('.grid').masonry();
      })
})

// Scroll/switch right side bar

// $(document).ready(function() {
//   $("#slide-button1").click(function(){
//       $('.slidebar').animate({left: '0px'}, 300);
//       $( "#slide-button1" ).addClass( "active-slide" )
//       $( "#slide-button2" ).removeClass( "active-slide" )
//       console.log("slide-button1 clicked!");
//     });
//     $("#slide-button2").click(function(){
//       $('.slidebar').animate({left: '-310px'}, 300);
//       $( "#slide-button2" ).addClass( "active-slide" )
//       $( "#slide-button1" ).removeClass( "active-slide" )
//       console.log("slide-button2 clicked!");
//   });
// });

// The Crew slider
jQuery(document).ready(function ($) {

   // .ready was eerst .change
   $('#checkbox').ready(function(){
     setInterval(function () {
         moveRight();
     }, 3000);
   });
   
     var slideCount = $('#personSlider ul li').length;
     var slideWidth = $('#personSlider ul li').width();
     var slideHeight = $('#personSlider ul li').height();
     var sliderUlWidth = slideCount * slideWidth;
     
     $('#personSlider').css({ width: slideWidth, height: slideHeight });
     
     $('#personSlider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
     
     $('#personSlider ul li:last-child').prependTo('#personSlider ul');
   
     function moveLeft() {
         $('#personSlider ul').animate({
             left: + slideWidth
         }, 300, function () {
             $('#personSlider ul li:last-child').prependTo('#personSlider ul');
             $('#personSlider ul').css('left', '');
         });
     };
   
     function moveRight() {
         $('#personSlider ul').animate({
             left: - slideWidth
         }, 300, function () {
             $('#personSlider ul li:first-child').appendTo('#personSlider ul');
             $('#personSlider ul').css('left', '');
         });
     };
   
     $('a.control_prev').click(function () {
         moveLeft();
     });
   
     $('a.control_next').click(function () {
         moveRight();
     });
   
   });


   $(document).ready(function() {
      var sidebar = document.getElementById('sidebarRight');
   
      document.getElementById('open').addEventListener('click', function(){
         sidebar.classList.add('lolol');
      });
   
      document.getElementById('close').addEventListener('click', function(){
         sidebar.classList.remove('lolol');
      });
   });