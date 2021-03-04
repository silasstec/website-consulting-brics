const API = 'https://adm.consultingbrics.com/api/'
// Artigos
function load_articles(page, limit, element_callback, skip, type){



    $('#articles-response').attr('skip', skip);

    if(page==1){
        var api = API+"posts/www.consultingbrics.com/"+limit+'/'+skip;
    }else{
        if(page!=='undefined'){
            var api = page
        }
    }
    $.ajax({
        url: api,
        method: "get",
        success: function(res){
            console.log('articles:', res);

                var col = ''
                var i = 1;
                $.each( res.data, function( index, value ) {
                    
                    if(i==1){
                        var style = "padding-right:5px;"
                    }

                    if(i==2){
                        var style = "padding-left:5px;padding-right:5px;";
                    }

                    if(i==3){
                        var style = "padding-left:5px;"
                    }
                    

                    col += '<div class="cols"><div style="'+style+'" n="'+i+'">';
                    col += '    <a href="./post/'+value.id+'">'
                    if(value.thumbnail==null){
                        col += '        <div style="margin-bottom:50px;min-height:300px;padding-top:50px;padding-bottom:50px;padding-left:25px;padding-right:25px;" class="text-center artigo"><h5 class="font-philosopher we-700 color-blue pt-18">'+value.title+'</h5></div>';
                    }else{
                        col += '        <img src="'+value.thumbnail+'" class="img-fluid m-b-15"  alt="">';
                        col += '        <h5 class="font-philosopher we-700 color-blue pt-18 text-sm-center m-b-50">'+value.title+'</h5>';
                    }
                    col += '    </a>'
                    col += '</div></div>';
                    i++;

                    if(i==4){
                        i = 1;
                    }
                });

                $(element_callback).html('');
                $(element_callback).html(col);

                

                if(res.prev_page_url!==null){
                    $(element_callback).attr("prev", res.prev_page_url)
                }else{
                    $(element_callback).attr("prev", res.current_page)
                }

                if(res.next_page_url!==null){
                    $(element_callback).attr("next", res.next_page_url)
                }else{
                    $(element_callback).attr("next", res.current_page)
                }
        }
    });

}


// Artigos
function load_articles_infinite(page, limit, element_callback, skip, type){

    

    $('#articles-response').attr('skip', skip);

    if(page==1){
        var api = API+"posts/www.consultingbrics.com/"+limit+'/'+skip;
    }else{
        if(page!=='undefined'){
            var api = page
        }
    }
    $.ajax({
        url: api,
        method: "get",
        success: function(res){
            
            $(element_callback).attr("page", '')
            $(element_callback).attr("prev", '')
            $(element_callback).attr("next", '')

            console.log('articles:', res);

                var col = ''
                $.each( res.data, function( index, value ) {
                    col += '<div class="col-lg-4">';
                    col += '    <a href="./post/'+value.id+'">'
                    if(value.thumbnail==null){
                        col += '        <div style="margin-bottom:50px;min-height:300px;padding-top:50px;padding-bottom:50px;padding-left:25px;padding-right:25px;" class="text-center artigo"><h5 class="font-philosopher we-700 color-blue pt-18">'+value.title+'</h5></div>';
                    }else{
                        col += '        <img src="'+value.thumbnail+'" class="img-fluid m-b-25"  alt="">';
                        col += '        <h5 class="font-philosopher we-700 color-blue pt-18" style="margin-bottom:50px;">'+value.title+'</h5>';
                    }
                    col += '    </a>'
                    col += '</div>';
                });

             
                $(element_callback).append(col);

                $(element_callback).attr("page", res.current_page)

                if(res.prev_page_url!==null){
                    $(element_callback).attr("prev", res.prev_page_url)
                }else{
                    $(element_callback).attr("prev", res.current_page)
                }

                if(res.next_page_url!==null){
                    $(element_callback).attr("next", res.next_page_url)
                    //$('.infinite-more-link').attr('href', res.next_page_url);
                }else{
                    $(element_callback).attr("next", res.current_page)
                }
        }
    });

}