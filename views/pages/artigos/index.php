<?php include_once('./analyticstracking.php'); ?>
<?php 

    $post = json_decode(file_get_contents(API.'posts/www.consultingbrics.com/1/0'), true)['data'][0];

?>

<div class="container container-xl" style="margin-bottom:100px;background-size:auto 100%;background-image:url('<?php echo $post['thumbnail']; ?>');" id="article-principal" id="">

    <div class="row">
        <div class="col-lg-6 col-12" style="padding-top:25px">

            <?php if($post['thumbnail']!=""){ ?>
                <div class="d-block d-lg-none d-xl-none">
                    <img src="<?php echo $post['thumbnail']; ?>" class="img-fluid" alt="">
                </div>
            <?php } ?>

        </div>
        <div class="col-lg-6 col-12 p-100 bg-blue-5 text-center text-md-center p-100-to-25">
            <h1 class="pt-28 font-philosopher we-700 m-b-25 color-blue" id="article-title"><?php echo $post['title'] ?></h1>
            <p class="m-b-50 pt-14" id="article-description"><?php echo $post['description']; ?></p>
            <a href="<?php echo URL; ?>post/<?php echo $post['id']; ?>" id="article-link" class="btn btn-action" id="article-title">LER MAIS</a>
        </div>
    </div>
    
</div>

<?php require_once __DIR__.'/ultimas.php'; ?>