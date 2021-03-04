<?php 
    require_once('config/app.php');
    
    $page = (isset($_GET['page']))?explode('/', $_GET['page'])[0]:'homepage';

    

    if(isset($pages[$page])){

        $title = $pages[$page]['title'];
        $_page = $pages[$page]['page'];
      
        if($page=='post'){
        
            if(isset(explode('/', $_GET['page'])[1])){

                $id = explode('/', $_GET['page'])[1];
                $post = json_decode(file_get_contents(API.'post/'.$id), true);
                $title = $post['title'];
                $page = 'views/pages/artigos/artigo.php';

                require_once('views/body/page.php');
            }else{
                echo "Artigo não encontrado!";
                exit();
            }

        }else{

            if(file_exists($_page)){
                $page = $_page;
                require_once('views/body/page.php');
            }else{
                echo "Página não encontrada!";
            }

        }

    }
    
?>
