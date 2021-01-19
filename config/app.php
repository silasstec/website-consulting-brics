<?php

    if(!isset($_COOKIE['lang'])){
        setcookie('lang','pt');
    }

    if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
        if(file_exists('lang/'.$lang.'.php')){
            setcookie('lang', $lang);
            header('Location: index.php');
        }
    }

    require_once('lang/'.$_COOKIE['lang'].'.php');

    function lang($str){
        return str_ireplace(array("\r","\n",'\r','\n'),'', $str);
    }