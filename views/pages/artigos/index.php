<?php 

    $post = json_decode(file_get_contents(API.'posts/www.consultingbrics.com/1/0'), true)['data'][0];

?>

<div class="container container-xl no-sm" style="margin-bottom:100px;background-size:auto 100%;background-image:url('<?php echo $post['thumbnail']; ?>');" id="article-principal" id="">

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

<div style="margin-top:125px;" id="ultimas-desktop" class="no-sm">
    <?php require_once __DIR__.'/ultimas.php'; ?>
</div>

<?php unset($post); ?>

<div style="margin-top:125px;" id="ultimas-mobile" class="d-block md-block lg-none xl-none">
    <?php 

        $id = $post['id']??0;

    ?>
    <div class="container m-b-50">
        
            <h5 class="upper we-700 color-blue m-b-25 pt-14">artigos recentes 
            
                <a href="javascript:void(0)"
                onclick="load_articles($('#articles-response-<?php echo $id; ?>').attr('prev'), 3, '#articles-response-<?php echo $id; ?>', $('#articles-response-<?php echo $id; ?>').attr('skip'));">
                    <img src="./assets/images/<?php echo $imode; ?>arrow-left.svg" alt="" style="margin-left:15px;margin-right:10px">
                </a>

                <a href="javascript:void(0)"
                onclick="load_articles($('#articles-response-<?php echo $id; ?>').attr('next'), 3, '#articles-response-<?php echo $id; ?>', $('#articles-response-<?php echo $id; ?>').attr('skip'));">
                    <img src="./assets/images/<?php echo $imode; ?>arrow-right.svg" alt="">
                </a>
            
            </h5>

            <div class="articles-responsives-scroll" style="min-height:350px">
                <div class="articles-responsives">
                    <div class="rows text-sm-center" id="articles-response-<?php echo $id; ?>" page="" prev="1" next="1" skip="">
                        
                    </div>
                </div>
            </div>

        <div class="text-center m-t-50">
            <a href="<?php echo URL; ?>posts" class="btn btn-action">MAIS ARTIGOS</a>
        </div>

    </div>


    <script>
        load_articles(1, 3, '#articles-response-<?php echo $id; ?>', <?php echo $post['id']??0; ?>, true);
    </script>


</div>

