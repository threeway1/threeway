(function($){
    // visual slide
    $(document).ready(function(){
        $('#visual > ul').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 6000
        });
    });
    $('#visual > ul').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active').addClass('action'); 
        });
    });
    $('#visual > ul').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active').addClass('action'); 
        });
    });
})(jQuery);