$(document).ready(function() {
    var btn_menu = $(".btn_menu");
    var btn_menu_close = $(".btn_menu_close");
    var menu = $(".menu");
    btn_menu.click(function() {
        menu.addClass('menuOpen');
    });
    btn_menu_close.click(function() {
        menu.removeClass('menuOpen');
    });
    
});