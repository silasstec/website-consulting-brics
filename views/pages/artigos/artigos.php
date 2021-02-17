<div class="container m-b-50 ajax-scroll" style="margin-top:160px;" id="ajax-scroll">
    
    <h5 class="upper we-700 color-blue m-b-25 pt-14">VOLTAR</h5>

    <div >

        <div class="row" id="articles-response" page="" prev="1" next="1" skip="">
        
        </div>

    </div>

</div>

<div id="last-item" num="0"></div>

<a class="infinite-more-link">LINK</a>

<button href="#body" class="btn btn-action scroll-link btn-back-top show-back-to-top" style="display: inline-block;">Back to top</button>


<script src="./node_modules/waypoints/lib/noframework.waypoints.min.js"></script>
<script src="./node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="./node_modules/waypoints/lib/shortcuts/infinite.min.js"></script>



<script src="./assets/js/articles.js"></script>
<script>
    load_articles_infinite(1, 9, '#articles-response', 0, true);
</script>

<script>

    /**var waypoint = new Waypoint({
        element: document.getElementById('articles-response'),
        handler: function(direction) {
            console.log(direction)
            //if(direction=='down'){
               
                load_articles_infinite($('#articles-response').attr('next'), 9, '#articles-response', $('#articles-response').attr('skip'));
            //}
        }
    })**/

    var listElm = document.querySelector('#articles-response');

    window.addEventListener('scroll', function(){
        if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
            //load_articles_infinite($('#articles-response').attr('next'), 9, '#articles-response', $('#articles-response').attr('skip'));
        }
    });

    $(window).scroll(function() {
        if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
            console.log('LISTA')
        }

    });

    
</script>



<script src="./node_modules/infinite-scroll/dist/infinite-scroll.pkgd.js"></script>

<script>



    var $container = $('#articles-response').infiniteScroll({

        path: function(){
            var num = parseInt($('#last-item').attr('num'))
            $('#last-item').attr('num', num+1)
            console.log('https://adm.consultingbrics.com/api/posts/www.consultingbrics.com/9/0?page='+num)
            return 'https://adm.consultingbrics.com/api/posts/www.consultingbrics.com/9/0?page='+num;
        },

        // disable history
        history: false,
        });

        $container.on( 'load.infiniteScroll', function( event, body ) {
        // body is JSON, put that data into template
        let itemsHTML = template.compile( body );
        // convert to jQuery object
        let $items = $( itemsHTML );
        // append items
        $container.append( $items );

    });

</script>