$(document).ready(function() {

   var owl = $("#owl-demo");

   owl.owlCarousel({
      // items: 5, //10 items above 1000px browser width
      itemsDesktop: [1000, 5], //5 items between 1000px and 901px
      itemsDesktopSmall: [900, 3], // betweem 900px and 601px
      itemsTablet: [600, 2], //2 items between 600 and 0
      itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
      autoWidth:true,
      autoHeight:true,
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

// TEEEEESSST
$(document).ready(function(){
    var $btns = $('.categoryBTN').click(function() {
        if (this.id == 'all') {
          $('#grid > li').fadeIn(450);
        } else {
          var $el = $('.' + this.id).fadeIn(450);
          $('#grid > li').not($el).hide();
        }
        // $(document).load(function(){ $('#grid').masonry(); });
        $btns.removeClass('on');
        $(this).addClass('on');

        $('#grid').masonry();
      })

    // var $search = $("#search").on('input',function(){
    //     var matcher = new RegExp($(this).val(), 'gi');
    //     $('.post').show().not(function(){
    //         return matcher.test($(this).find('.name').text())
    //     }).hide();
    // })
})


/* Overlay with fade in / fade out effect */

$(document).ready(function (){
   $( "#openAbout_button" ).click(function() {
      $( ".page-sidebar-right" ).animate({
         right: '0'},200).animate({
         opacity: '1'},350);
      $( ".page-content-container" ).animate({
      	'padding-right' : 360},100);
   });

   $('#closeAbout_button').click(function(){
      $('.page-sidebar-right').animate({
        	opacity: '1'},100).animate({
        	right: '-360px'}, 200);
      $( ".page-content-container" ).animate({
      	'padding-right' : 0},100);
      });
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

// TEEEEESSST
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
