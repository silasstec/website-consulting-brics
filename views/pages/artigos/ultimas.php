<div class="container m-b-50">
    
        <h5 class="upper we-700 color-blue m-b-25 pt-14">artigos recentes 
        
            <a href="javascript:void(0)"
            onclick="load_articles($('#articles-response').attr('prev'), 3, '#articles-response', $('#articles-response').attr('skip'));">
                <img src="./assets/images/arrow-left.png" alt="" style="margin-left:15px;margin-right:10px">
            </a>

            <a href="javascript:void(0)"
            onclick="load_articles($('#articles-response').attr('next'), 3, '#articles-response', $('#articles-response').attr('skip'));">
                <img src="./assets/images/arrow-right.png" alt="">
            </a>
        
        </h5>

        <div class="articles-responsives-scroll" style="min-height:350px">
            <div class="articles-responsives">
                <div class="rows text-sm-center" id="articles-response" page="" prev="1" next="1" skip="">
                    
                </div>
            </div>
        </div>

    <div class="text-center m-t-50">
        <a href="./artigos_lista.php" class="btn btn-action">MAIS ARTIGOS</a>
    </div>

</div>


<button href="#body" class="btn btn-action scroll-link btn-back-top" style="display: inline-block;">Back to top</button>

<script src="./assets/js/articles.js?1"></script>
<script>
    load_articles(1, 3, '#articles-response', <?php echo $post['id']??0; ?>, true);
</script>

