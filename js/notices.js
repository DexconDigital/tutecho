$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function(data) {
        var result = "";
        var j = 0;
        for (var indice in data) {
            result += '<div class="col-md-3 col-sm-6 col-xs-12">'+
                '<div id="ID-416" class="item-wrap">'+
                '<div class="property-item item-grid">'+
                '<div class="figure-block">'+
                '<figure class="item-thumb">'+
                '<a href="http://biinyu.com.co/tutecho/detalle-noticia.php?codigo=' + data[j].id + '" title="' + data[j].titulo + '">'+
                data[j].titulo + '</a>' +
                '<img style="width:100%;height:200px;" src="tutecho-noticias/admin/' + data[j].imagen + '" class="attachment-medium size-medium wp-post-image" alt=""/>' +
				'</a>'+
                '</figure>'+
                '</div>'+
                '<div class="item-body">'+
                '<div class="body-left">'+
                '<div class="info-row">'+
                '<h3 class="property-title"><a href="detalle-noticia.php?codigo=' + data[j].id + '">Noticia</a></h3><address class="property-address">' + data[j].fecha + '</address> </div>'+
                '<div class="table-list full-width info-row">'+
                '<div class="cell">'+
                '<div class="info-row amenities">'+
                '<p style="color:#000"><span class="h-beds">' + data[j].descripcion + ' </span></p>'+
                '</div>'+
                '</div>'+
                '<div class="cell">'+
                '<div class="phone">'+
                '<a  class="btn btn-danger"  href="detalle-noticia.php?codigo=' + data[j].id + '" rel="bookmark" title="'+data[j].titulo+'">Leer más<i class="fa fa-angle-right fa-right"></i></a>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>';
            j++;
            if (j >3) {
                break;
            }
        }
        
                
        $("#ulti-noticias").append(result);


    },
    error: function(data) {
    }
});
$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function(data) {
        var result = "";
        for (var j in data) {
            result += '<div class="col-md-3 col-sm-6 col-xs-12">'+
                ' <div id="ID-416" class="item-wrap">'+
                '<div class="property-item item-grid" >'+
                ' <div class="figure-block" >'+
                '<figure class="item-thumb">'+
                '<a class="hover-effect" href="detalle-noticia.php?codigo=' + data[j].id + '" title="'+data[j].descripcion+'">'+
                '<img class="img-responsive" src="http://biinyu.com.co/tutecho/v5/tutecho-noticias/admin/'+data[j].imagen+'" alt="'+data[j].descripcion+'" style="min-width: 100%;"/>'+
                '<a href="detalle-noticia.php?codigo=' + data[j].id + '" title="'+data[j].descripcion+'">'+
                '</a>'+
                '</figure>'+
                '</div>'+
                '<div class="item-body">'+
                '<div class="body-left">'+
                '<h3 class="property-title">'+
                '<a href="detalle-noticia.php?codigo=' + data[j].id + '" rel="bookmark" title="'+data[j].titulo+'">'+data[j].titulo+'</a>'+
                '</h3>'+
                '<address class="property-address">'+data[j].fecha+'</address>'+
                '</div>'+
                '<div class="table-list full-width info-row">'+
                '<div class="cell">'+
                '<div class="phone">'+
                '<a <a  class="btn btn-danger" href="detalle-noticia.php?codigo=' + data[j].id + '" rel="bookmark" title="'+data[j].titulo+'">Leer más'+
                '<i class="fa fa-angle-right fa-right"></i>'+
                '</a>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>';


        }
        $("#notices-info").append(result);


    },
    error: function(data) {
    }
});