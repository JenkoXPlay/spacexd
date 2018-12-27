<?php
    // On récupère l'URL pour vérifier de quelle URL il s'agit
    $currentPage = filter_input(INPUT_GET, 'page');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Space XD</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width: 1000px)" href="css/style.css" />
    <link rel="stylesheet" media="screen and (min-width: 1000px)" href="css/style_pc.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

    <div class="contentHeader">
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
                <a href="./home.php" class="<?php if($currentPage == "home.php"){echo 'activeURL';} ?>">Home</a>
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
    </div>

    <div class="verticalBar">
        <img class="icon" src="./img/logo_icon.svg" />
        <div class="social">
            <img src="./img/white/facebook.svg" />
            <img src="./img/white/youtube.svg" />
            <img src="./img/white/twitter.svg" />
            <div class="whiteBar"></div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var widthScreen = (document.body.clientWidth);
            var btn_menu = $(".btn_menu");
            var btn_menu_close = $(".btn_menu_close");
            var menu = $(".menu");
            if(widthScreen <= 1000){
                menu.hide();
            }
            btn_menu.click(function() {
                menu.show();
            });
            btn_menu_close.click(function() {
                menu.hide();
            });
            
        });
    </script>