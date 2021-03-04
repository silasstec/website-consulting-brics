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
    define('URL', 'http://localhost/website-consulting-brics/');

    $pages = [];


    if($_COOKIE['lang']=='pt'){

        $pages['homepage']['title'] = 'Consulting Brics'; 
        $pages['homepage']['keywords'] = 'esg, environment social and corporate governance'; 
        $pages['homepage']['page'] = 'views/pages/homepage.php'; 

        $pages['servicos']['title'] = 'Consulting Brics | Serviços'; 
        $pages['servicos']['keywords'] = 'consultoria de desenvolvimento sustentável, consultoria de inovação, consultoria estratégica'; 
        $pages['servicos']['page'] = 'views/pages/servicos.php'; 

        $pages['blog']['title'] = 'Consulting Brics | Blog'; 
        $pages['blog']['keywords'] = 'inovação e sustentabilidade, inovação e desenvolvimento sustentável'; 
        $pages['blog']['page'] = 'views/pages/artigos/index.php'; 

        $pages['post']['title'] = ''; 
        $pages['post']['keywords'] = 'inovação e sustentabilidade, inovação e desenvolvimento sustentável'; 
        $pages['post']['page'] = 'views/pages/artigos/artigo.php'; 

        $pages['posts']['title'] = 'Consulting Brics | Publicações'; 
        $pages['posts']['keywords'] = 'inovação e sustentabilidade, inovação e desenvolvimento sustentável'; 
        $pages['posts']['page'] = 'views/pages/artigos/artigos.php';

        $pages['legal-info']['title'] = 'Consulting Brics | Informação legal'; 
        $pages['legal-info']['keywords'] = ''; 
        $pages['legal-info']['page'] = 'views/pages/legal.php';

    }else{

        $pages['homepage']['title'] = 'Consulting Brics'; 
        $pages['homepage']['keywords'] = 'esg, environmental social and corporate governance'; 
        $pages['homepage']['page'] = 'views/pages/homepage.php'; 

        $pages['servicos']['title'] = 'Consulting Brics | Services'; 
        $pages['servicos']['keywords'] = 'sustainable consulting firm,sustainability business consulting, innovation consulting'; 
        $pages['servicos']['page'] = 'views/pages/servicos.php'; 

        $pages['blog']['title'] = 'Consulting Brics | Blog'; 
        $pages['blog']['keywords'] = 'sustainability and innovation'; 
        $pages['blog']['page'] = 'views/pages/artigos/index.php'; 

        $pages['post']['title'] = ''; 
        $pages['post']['keywords'] = 'sustainability and innovation'; 
        $pages['post']['page'] = 'views/pages/artigos/artigo.php'; 

        $pages['posts']['title'] = 'Consulting Brics | Posts'; 
        $pages['posts']['keywords'] = 'sustainability and innovation'; 
        $pages['posts']['page'] = 'views/pages/artigos/artigos.php';

        $pages['legal-info']['title'] = 'Consulting Brics | Legal information'; 
        $pages['legal-info']['keywords'] = ''; 
        $pages['legal-info']['page'] = 'views/pages/legal.php';

    }