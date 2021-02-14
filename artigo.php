<?php 
    require_once('config/app.php');
?>
<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php require_once('views/body/head.php'); ?>

        <title>Consulting Brics | Artigos</title>
    </head>
    <body id="body">
        <?php require_once('views/body/menu.php'); ?>

        <?php require_once('views/pages/artigos/artigo.php'); ?>

        <?php require_once('views/body/footer.php'); ?>
    </body>
</html>