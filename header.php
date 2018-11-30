<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Space XD</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

    <div class="header">
        <img src="./img/space_xd_white.png" class="logo" />
        <div class="btn_menu">
            <img src="./img/menu_burger.svg" />
        </div>
    </div>

    <div class="menu">
        <div class="menu_header">
            <img src="./img/space_xd_black.png" class="logo" />
            <div class="btn_menu_close">
                <img src="./img/close_menu.svg" />
            </div>
        </div>
        <div class="content">
            <input type="text" name="search" placeholder="Recherche" />
            <a href="./home.php">Home</a>
            <a href="">What we do</a>
            <a href="./mars.php">Project_mars</a>
            <a href="">Events</a>
            <a href="">Contact</a>
        </div>
        <div class="footer">
            <img src="./img/facebook.svg" />
            <img src="./img/youtube.svg" />
            <img src="./img/twitter.svg" />
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var btn_menu = $(".btn_menu");
            var btn_menu_close = $(".btn_menu_close");
            var menu = $(".menu");
            menu.hide();
            btn_menu.click(function() {
                menu.show();
            });
            btn_menu_close.click(function() {
                menu.hide();
            });

        });
    </script>