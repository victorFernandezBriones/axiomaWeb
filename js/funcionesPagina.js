$(document).ready(function () {
    $('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click', function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $(".nav a").on("click", function () {
        $(".nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });

    $('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });


    $('#toTop').click(function () {
        $("html, body").animate({scrollTop: 0}, 700);
        return false;
    });

    $('#aInicio').click(function () {
        $("html, body").animate({scrollTop: 0}, 700);
        return false;
    });








});

function gallery() {
}
;

var $itemsHolder = $('ul.port2');
var $itemsClone = $itemsHolder.clone();
var $filterClass = "";
$('ul.filter li').click(function (e) {
    e.preventDefault();
    $filterClass = $(this).attr('data-value');
    if ($filterClass == 'all') {
        var $filters = $itemsClone.find('li');
    } else {
        var $filters = $itemsClone.find('li[data-type=' + $filterClass + ']');
    }
    $itemsHolder.quicksand(
            $filters,
            {duration: 1000},
            gallery
            );
});

$(document).ready(gallery);