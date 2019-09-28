$(function () {
    $('#collapsepage').on('shown.bs.collapse', function (e) {
            $('html,body').animate({
                scrollTop: $('#collapsepage').offset().top -80
            }, 500); 
    }); 
});