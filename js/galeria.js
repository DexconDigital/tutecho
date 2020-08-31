var galeria = "";



/*for (var i = 0; i < 179; i++) {

    galeria += '<div class="col-md-11 col-sm-6 col-xs-12">' +
        '<div id="ID-416" class="item-wrap">' +
        '<div class="property-item item-grid" >' +
        '<div class="figure-block" >' +
        '<figure class="item-thumb">' +
        '<a class="hover-effect" href="detalle-noticia.html"><img src="images/galeria/' + (i + 1) + '.jpg' + '"' +
        'class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt=""' +
        ' sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">' +
        '</a>' +
        '</figure>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';
}*/

$(".galeria-images").html(galeria);

var fotos = "";
for (var i = 0; i < 180; i++) {
    fotos += '<div class="col-md-3 col-sm-3 col-xs-12">' +
    '<div id="ID-416" class="item-wrap">' +
    '<div class="property-item item-grid" >' +
    '<div class="figure-block" >' +
    '<figure class="item-thumb">' +
    '<div class="item"><a class="lightbox" href="#foto  '+(i+1)+'"><img src="images/galeria/'+ (i + 1) + '.jpg" alt="" style="width:100%;height: 153px;" data-toggle="modal" data-target="#exampleModalCenter'+(i+1)+'"></a></div>'+
    '</figure>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '<div class="modal fade" id="exampleModalCenter'+(i+1)+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">'+
    '<div class="modal-dialog modal-dialog-centered" role="document">'+
    '<div class="modal-content">'+
    
    '<div class="modal-body">'+
    '<img src="images/galeria/'+ (i + 1) + '.jpg" alt="" style="width:100%;height: 600px;">'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>';
}

$(".gallery-images").html(fotos);

var angle = 0;

function galleryspin(sign) {
    spinner = document.querySelector("#spinner");
    if (!sign) {
        angle = angle + 45;
    } else {
        angle = angle - 45;
    }
    spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg);");
}
