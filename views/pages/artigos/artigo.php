<?php include_once('./analyticstracking.php'); ?>
<?php if($post['thumbnail']!=""){ ?>
<div class="container-fluid d-none d-md-none d-lg-block d-xl-block" style="padding-top:160px;padding-bottom:100px;background-image:url('<?php echo $post['thumbnail']; ?>');background-size:100% auto;height:500px;">
</div>
<img src="<?php echo $post['thumbnail']; ?>" class="img-fluid d-block d-lg-none d-xl-none" style="margin-top:80px;" alt="">
<?php }else{ ?>
    <div style="margin-top:150px;"></div>
<?php } ?>

<div class="" style="margin-bottom:75px;margin-top:75px;">
    <div class="container ">
        <div class="row">
            <div class="col-12 text-sm-center text-lg-left">

                <h1 class="pt-28 font-philosopher we-700 m-b-25 color-blue"><?php echo $post['title']; ?></h1>

                <div class="p-14">
                    <?php echo $post['content']; ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__.'/ultimas.php'; ?>

<button href="#body" class="btn btn-action scroll-link btn-back-top show-back-to-top" style="display: inline-block;">Back to top</button>