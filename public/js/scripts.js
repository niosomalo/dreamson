(function($) {
    "use strict";

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 60
    });

    $('#topNav').affix({
        offset: {
            top: 200
        }
    });
    
    new WOW().init();
    
    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - 60)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });
    
    $('.navbar-collapse ul li a').click(function() {
        /* always close responsive nav after click */
        $('.navbar-toggle:visible').click();
    });

    $('#galleryModal').on('show.bs.modal', function (e) {
       $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
    });

})(jQuery);

$(document).ready(function(){
    // invoke the carousel
        $('#myCarousel').carousel({
          interval:6000
        });
    
    // scroll slides on mouse scroll 
   
    
    //scroll slides on swipe for touch enabled devices 
    
         $("#myCarousel").on("touchstart", function(event){
     
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
    
            var yMove = event.originalEvent.touches[0].pageY;
            if( Math.floor(yClick - yMove) > 1 ){
                $(".carousel").carousel('next');
            }
            else if( Math.floor(yClick - yMove) < -1 ){
                $(".carousel").carousel('prev');
            }
        });
        $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
        });
    });
        
    });
    //animated  carousel start
    $(document).ready(function(){
    
    //to add  start animation on load for first slide 
    $(function(){
            $.fn.extend({
                animateCss: function (animationName) {
                    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    this.addClass('animated ' + animationName).one(animationEnd, function() {
                        $(this).removeClass(animationName);
                    });
                }
            });
                 $('.item1.active img').animateCss('slideInDown');
                 $('.item1.active h2').animateCss('zoomIn');
                 $('.item1.active p').animateCss('fadeIn');
                 
    });
        
    //to start animation on  mousescroll , click and swipe
    
    
     
         $("#myCarousel").on('slide.bs.carousel', function () {
            $.fn.extend({
                animateCss: function (animationName) {
                    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    this.addClass('animated ' + animationName).one(animationEnd, function() {
                        $(this).removeClass(animationName);
                    });
                }
            });
        
    // add animation type  from animate.css on the element which you want to animate
    
            $('.item1 img').animateCss('slideInDown');
            $('.item1 h2').animateCss('zoomIn');
            $('.item1 p').animateCss('fadeIn');
            
            $('.item2 img').animateCss('zoomIn');
            $('.item2 h2').animateCss('swing');
            $('.item2 p').animateCss('fadeIn');
            
            $('.item3 img').animateCss('fadeInLeft');
            $('.item3 h2').animateCss('fadeInDown');
            $('.item3 p').animateCss('fadeIn');
        });
    });
    