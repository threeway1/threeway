(function($){
    // tab scroll 및 active 효과
    $(document).on('click','.tab-menu > ul > li > a', function(){
        $(this).parents().siblings().removeClass('active');
        $(this).parents().addClass('active');
    });
    $(function(){
        $('.tab-menu > ul > li > .btn-staff').click(function(){
            var staff = $('#staffs').offset().top;
            staff = parseInt(staff - 120);
            $('html, body').animate({scrollTop:staff},600);
        });
        $('.tab-menu > ul > li > .btn-location').click(function(){
            var location = $('#locations').offset().top;
            location = parseInt(location - 120);
            $('html, body').animate({scrollTop:location},600);
        });
        $('.tab-menu > ul > li > .btn-time').click(function(){
            var time = $('#times').offset().top;
            time = parseInt(time);
            $('html, body').animate({scrollTop:time},600);
        });
    });
    // slider
    $(document).ready(function(){
        $('.offce-slide > ul').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: true
        });
    });
})(jQuery);