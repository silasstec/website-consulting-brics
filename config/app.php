<?php

    if(isset($_GET['bmode'])){

        if(!isset($_COOKIE['bmode'])){
            setcookie('bmode', true);
            header('Location: index.php');
        }else{
            unset($_COOKIE['bmode']);
            setcookie("bmode", "", time()-3600);
            header('Location: index.php');
        }

    }

    $imode = (isset($_COOKIE['bmode']))?'bmode/':'';

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

    if(isset($_COOKIE['lang'])){
        require_once('lang/'.$_COOKIE['lang'].'.php');
    }else{
        require_once('lang/pt.php');
    }

    function lang($str){
        return str_ireplace(array("\r","\n",'\r','\n'),'', $str);
    }

    define('API', 'https://adm.consultingbrics.com/api/');