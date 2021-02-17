<?php 
    require_once('config/app.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $post = json_decode(file_get_contents(API.'post/'.$id), true);

        
    }else{
        echo "Artigo não encontrado!";
        exit();
    }

?>
<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php require_once('views/body/head.php'); ?>

        <title>Consulting Brics | <?php echo $post['title']; ?></title>
    </head>
    <body id="body">
        <?php require_once('views/body/menu.php'); ?>

        <?php require_once('views/pages/artigos/artigo.php'); ?>

        <?php require_once('views/body/footer.php'); ?>
    </body>
</html>