( function( $ ) {
    $( function() {
        if($('.content-subcat')) {
            $(".filtros li a").click(function(event) {
                event.preventDefault();
                event.stopPropagation();

                var cat = $(this).parent('li').attr('class');
                var res = cat.replace('cat-item', "");
                var catName = res.replace('cat-item-','');
                $(this).toggleClass('selected');
                $('article.category-' + catName.trim()).toggleClass('tipo-hide');
            });

             $(".filtros-rubro li a").click(function(event) {
                event.preventDefault();
                event.stopPropagation();

                var cat = $(this).parent('li').attr('class');
                var res = cat.replace('cat-item', "");
                var catName = res.replace('cat-item-','');
                $(this).toggleClass('selected');
                $('article.category-' + catName.trim()).toggleClass('rubro-hide');
            });
        }
    });

} )( jQuery );