<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="<?php echo $keywords; ?>">

        <?php require_once('views/body/head.php'); ?>


        <title><?php echo $title ?? 'Consulting Brics'; ?></title>
    </head>
    <body id="body">
        <?php include_once('./analyticstracking.php'); ?>

        <?php require_once('views/body/menu.php'); ?>

        <?php 
        
        $post = (isset($post))?$post:'';
        require_once($page); 
        
        ?>

        <?php require_once('views/body/footer.php'); ?>
    </body>
</html>
