var $ = jQuery.noConflict();

$(document).ready(function() {
    var element = document.getElementById('bitte-fullen-sie-das-formular-vollstandig-aus');
    var newPlace = document.getElementById('column-contact');
    var oldPlace = document.getElementById('heading__mobile-position');
    if ($(window).width() < 1024) {
        newPlace.insertBefore(element, newPlace.firstChild);
    } else {
        oldPlace.insertBefore(element, oldPlace.firstChild);
    }
    $(window).resize(function() {
        var element = document.getElementById('bitte-fullen-sie-das-formular-vollstandig-aus');
        var newPlace = document.getElementById('column-contact');
        var oldPlace = document.getElementById('heading__mobile-position');
        if ($(this).width() < 1024) {
            newPlace.insertBefore(element, newPlace.firstChild);
        } else {
            oldPlace.insertBefore(element, oldPlace.firstChild);
        }
    });
});