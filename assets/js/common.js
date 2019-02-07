(function($){
    // header 관련
    $(document).on('mouseenter','.gnb > ul > li > a', function() {
        $(this).parent().siblings('.active').removeClass('active');
        $(this).parent().addClass('active');
    });
    $(document).on('mouseleave','.gnb > ul > li', function() {
        $(this).removeClass('active');
    });
    $(document).on('mouseenter','.quick-move > ul > .office > a', function() {
        $(this).parent().siblings('.active').removeClass('active');
        $(this).parent().addClass('active');
    });
    $(document).on('mouseleave','.quick-move > ul > .office', function() {
        $(this).removeClass('active');
    });
    $(document).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
})(jQuery);