( function( $ ) {
//     function(event){
//         var api = event.target;
      
//       if(api.change_started){ 
//         var title = $(".slider-text .selected").attr("class");
//         var clase = title.replace("selected", "");
//         var return_class = clase.replace("slide-", "");
//         var numero = parseInt(return_class) + 1;
//         $(".slider-text .selected").removeClass("selected");
//         if(numero <= 3) {
//           $(".slider-text span").eq(numero).addClass("selected");
//         } else {
//             $(".slider-text span").eq(0).addClass("selected");
//         }   
//       }
//     }



    $( function() {
        if($('.content-subcat')) {
            $(".filtros li a").click(function(event) {
                event.preventDefault();
                event.stopPropagation();

                var cat = $(this).parent('li').attr('class');
                var res = cat.replace('cat-item', "");
                var catName = res.replace('cat-item-','');
                if(catName != 'destacada') {
                    $(this).toggleClass('selected');
                    $('article.category-' + catName.trim()).toggleClass('tipo-hide');
                }
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