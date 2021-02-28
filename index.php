<?php

    require_once "app/config.php";

    $url = isset($_GET["url"]);
    $url = array_filter(explode("/", $url));

    $file = $url[0].".php";
    
    if(is_file($file)){
        include $file;
    }else{
        include "app/view/pages/index.php";
    }