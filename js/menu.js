$(document).ready(function() {
    var btn_menu = $(".btn_menu");
    var menu = $(".menu");
    menu.hide();
    btn_menu.click(function() {
        btn_menu.hide();
        menu.show();
    });
});