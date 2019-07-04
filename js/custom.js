$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        margin: 2,
        loop: true,
        autoplay: true
    });
    $("#cycle-1").cycle({speed: 4000, fx: 'none'});
    $("#cycle-2").cycle({speed: 2000, fx: 'fadeout'});
});
