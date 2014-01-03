$('#bottom-menu').hover(function () {
    $('#bottom-menu-img').animate({ width: MNMLIST.bottom_menu_width}, 500);
    $('#bottom-menu-content').delay(500).fadeIn(500);
}, function () {
    $('#bottom-menu-content').fadeOut(500);
    $('#bottom-menu-img').delay(500).animate({ width: 36}, 500);
});