<div class="container m-b-50 ajax-scroll" style="margin-top:160px;" id="ajax-scroll">
    
    <a href="/"><h5 class="upper we-700 color-blue m-b-25 pt-14" id="voltar">VOLTAR</h5></a>

    <div>

        <div class="row" id="articles-response" page="" prev="1" next="1" skip="">

            <?php 
            
                echo file_get_contents('https://adm.consultingbrics.com/api/site/posts/9/0/');
            
            ?>

        </div>

    </div>

</div>


<button href="#body" class="btn btn-action scroll-link btn-back-top show-back-to-top" style="display: inline-block;">Back to top</button>


<script src="./node_modules/infinite-scroll/dist/infinite-scroll.pkgd.js"></script>

<script>

   

 
        var $container = $('#articles-response').infiniteScroll({

        path: '.pagination__next',
        checkLastPage: '.pagination__next',
        append:'.noticia',
        history:false,
        hideNav: '.pagination'

        });




</script>