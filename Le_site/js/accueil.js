/**
 * Created by maelb on 16/05/2017.
 */
$(document).ready(function() {
    $('header').addClass('invisible');
    $('.slider').slick({
        dots: true,
        touchMove: false,
        mobileFirst: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" id="buttonarrowprev"><img src="images/fleche.png" title="précédent"/></button>',
        nextArrow: '<button type="button" id="buttonarrownext"><img src="images/fleche.png" title="suivant"/></button>'
    });
});
var largeur_fenetre = $(window).width();

if (largeur_fenetre > 1000) {
    $(window).scroll(function() {
        var sticky = $('header'),
            scroll = $(window).scrollTop();
        if (scroll > 400) sticky.addClass('fixed'),
            sticky.removeClass('invisible');
        else sticky.removeClass('fixed'), sticky.addClass('invisible');
    });
} else {
    $('header').removeClass('invisible')
}
$('a[href^="#"]').addClass('invisible');
$('a[href^="#"]').click(function() {
    var the_id = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(the_id).offset().top
    }, 'slow');
});
$(window).scroll(function() {
    var fleche = $('a[href^="#"]'),
        scroll = $(window).scrollTop();
    if (scroll > 700) fleche.removeClass('invisible')
    else fleche.addClass('invisible');
});
$(window).scroll(function() {
    var sticky = $('#boutonvershaut'),
        scroll = $(window).scrollTop();
    if (scroll >= 300) sticky.addClass('visible');
    else sticky.removeClass('visible');
});

function initMap() {
    var jour = new Date();
    jour = jour.getDay();
    switch (jour) {
        case 1:
            var map3 = new google.maps.Map(document.getElementById('map'), {
                mapTypeId: google.maps.MapTypeId.satelite,
                center: {
                    lat: 47.227,
                    lng: -1.5519566
                },
                zoom: 11,
                scrollwheel: false,
                streetViewControl: false,
                mapTypeControl: false
            });
            var marker3 = new google.maps.Marker({
                position: {
                    lat: 47.227,
                    lng: -1.5519566
                },
                map: map3,
                title: 'Campus Fac science'
            });
            break;
        case 2:
            var map3 = new google.maps.Map(document.getElementById('map'), {
                mapTypeId: google.maps.MapTypeId.satelite,
                center: {
                    lat: 47.25482,
                    lng: -1.52325
                },
                zoom: 11,
                scrollwheel: false,
                streetViewControl: false,
                mapTypeControl: false
            });
            var marker4 = new google.maps.Marker({
                position: {
                    lat: 47.25482,
                    lng: -1.52325
                },
                map: map3,
                title: 'Stade de la Beaujoire'
            });
            break;
        case 3:
            var map3 = new google.maps.Map(document.getElementById('map'), {
                mapTypeId: google.maps.MapTypeId.satelite,
                center: {
                    lat: 47.23017,
                    lng: -1.63005
                },
                zoom: 11,
                scrollwheel: false,
                streetViewControl: false,
                mapTypeControl: false
            });
            var marker5 = new google.maps.Marker({
                position: {
                    lat: 47.23017,
                    lng: -1.63005
                },
                map: map3,
                title: 'Zénith'
            });
            break;


        case 4:
            var map3 = new google.maps.Map(document.getElementById('map'), {
                mapTypeId: google.maps.MapTypeId.satelite,
                center: {
                    lat: 47.2126,
                    lng: -1.55788
                },
                zoom: 11,
                scrollwheel: false,
                streetViewControl: false,
                mapTypeControl: false
            });
            var marker6 = new google.maps.Marker({
                position: {
                    lat: 47.2126,
                    lng: -1.55788
                },
                map: map3,
                title: 'Commerce'
            });
            break;


        case 5:
            var map3 = new google.maps.Map(document.getElementById('map'), {
                mapTypeId: google.maps.MapTypeId.satelite,
                center: {
                    lat: 47.21377,
                    lng: -1.54468
                },
                zoom: 11,
                scrollwheel: false,
                streetViewControl: false,
                mapTypeControl: false
            });
            var marker7 = new google.maps.Marker({
                position: {
                    lat: 47.21377,
                    lng: -1.54468
                },
                map: map3,
                title: 'Nantes Métropole'
            });
            break;

        case 6:
            var map3 = new google.maps.Map(document.getElementById('map'), {
                mapTypeId: google.maps.MapTypeId.satelite,
                center: {
                    lat: 47.20563,
                    lng: -1.53903
                },
                zoom: 11,
                scrollwheel: false,
                streetViewControl: false,
                mapTypeControl: false
            });
            var marker8 = new google.maps.Marker({
                position: {
                    lat: 47.20563,
                    lng: -1.53903
                },
                map: map3,
                title: 'Beaulieu'
            });
            break;
        case 0:
            var map3 = new google.maps.Map(document.getElementById('map'), {
                mapTypeId: google.maps.MapTypeId.satelite,
                center: {
                    lat: 47.227,
                    lng: -1.5519566
                },
                zoom: 11,
                scrollwheel: false,
                streetViewControl: false,
                mapTypeControl: false
            });
            break;
    }
}

$(function() {
    $(window).resize(function() {
        if (window.innerWidth > 1000) {
            $('header').css('position', 'fixed');
            $('header').addClass('invisible');
            $(window).scroll(function() {
                var sticky = $('header'),
                    scroll = $(window).scrollTop();
                if (scroll > 800) sticky.addClass('fixed'),
                    sticky.removeClass('invisible');
                else sticky.removeClass('fixed'), sticky.addClass('invisible');
            });
        } else {
            $('header').removeClass('invisible');
            $('header').css('position', 'relative');
        }
    });
});
google.maps.event.addDomListener(window, 'load', initMap);