(function($){
    $(document).on('click', '.btn-nav', function(){
        $(this).addClass('btn-close');
        $('body').addClass('opened');
    });
    $(document).on('click', '.btn-close', function(){
        $(this).removeClass('btn-close');
        $('body').removeClass('opened');
    });
    $(document).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
})(jQuery);