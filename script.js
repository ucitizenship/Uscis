$(document).ready(function () {
    $('.menu-toggle').click(function () {
        $('.links').toggleClass('active');
    });
});


window.onload = function () {
    window.location.hash = "no-back-button";
    window.location.hash = "Again-No-back-button";

    window.onhashchange = function () {
        window.location.hash = "no-back-button";
    }
}