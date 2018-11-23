<?php

    $page = filter_input(INPUT_GET, 'page');

    if(@fopen($page, "r")){
        include($page);
    }else header('Location:page.php?page=home.php');
    
?>