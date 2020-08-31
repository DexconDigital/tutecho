function paginator(actual) {

    let position = 0;
    if (position != 0) {
        position = localStorage.getItem("total");
    }
    var count = localStorage.getItem("count");

    if (actual == 'ant') {
        count--;
        localStorage.setItem("count", count);
        imprimir(count);
    }
    if (actual == 'sig') {
        count++;
        localStorage.setItem("count", count);
        imprimir(count);
    }
}

function imprimir(count) {
    localStorage.setItem("count", count);
    if (localStorage.getItem("gestion") == 0 && localStorage.getItem("ciudad") == 0 && localStorage.getItem("tipo") == 0 && localStorage.getItem("zona") == 0 && localStorage.getItem("precio") == 0 && localStorage.getItem("precio1") == 5000000000) {

        $.ajax({
            url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117'));
            },
            'dataType': "json",
            success: function (data) {
                console.log(data)
                localStorage.setItem("total", data.datosGrales.fin);

                var res = " ";


                for (var pos = 0; pos < data.Inmuebles.length; pos++) {
                    res += '<div class="col-md-4 col-sm-6 col-xs-12 col-techo">' +
                        '<div id="ID-416" class="item-wrap">' +
                        '<div class="property-item item-grid">' +
                        '<div class="figure-block">' +
                        '<figure class="item-thumb">' +
                        '<span class="label-featured label label-success">' + data.Inmuebles[pos].Tipo_Inmueble + '</span>' +
                        '<div class="label-wrap label-right hide-on-list">' +
                        '<span class="label-status label-status-8 label label-default"><a href="status/for-rent/index.html">' + data.Inmuebles[pos].Gestion + '</a></span> </div>' +
                        '<div class="price hide-on-list">';
                    if (data.Inmuebles[pos].Gestion == "Arriendo") {
                        res += '<span class="item-price label label-success">$' + data.Inmuebles[pos].Canon + '</span> </div>';
                    } else if (data.Inmuebles[pos].Gestion == "Arriendo/venta") {
                        res += '<span class="item-price label label-success">$' + data.Inmuebles[pos].Canon + '</span> </div>' +
                            '<div class="arr-venta hide-on-list"><span class="item-price arr-venta-label label label-success">$' + data.Inmuebles[pos].Venta + '</span> </div>';
                    } else {
                        res += '<span class="item-price label label-success">$' + data.Inmuebles[pos].Venta + '</span> </div>';
                    }
                    res += ''

                    if (data.Inmuebles[pos].foto1 != "") {
                        res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"><img src="' + data.Inmuebles[pos].foto1 + '"  alt="" class="imagen_inmo" ><span class="marcaagua"><img src="images/marca_de_agua.png" /></span></a>';
                    } else {
                        res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"><img src="images/no_image.png" alt="><span class="marcaagua"><img src="images/marca_de_agua.png" /></span></a>';
                    }
                    res += '</figure>' +
                        '</div>' +
                        '<div class="item-body">' +
                        '<div class="body-left">' +
                        '<div class="info-row">' +
                        '<h3 style="float: right;margin-top: -5px;" class="property-title"><a href="detalle-inmuebles.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">Codigo: ' + data.Inmuebles[pos].Codigo_Inmueble.slice(-3)
                        + '</a></h3>' +
                        '<h3 class="property-title"><a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' + data.Inmuebles[pos].Barrio + '</a></h3><address class="property-address">' + data.Inmuebles[pos].Ciudad + ", " + data.Inmuebles[pos].Departamento + '</address> </div>' +
                        '<div class="buttons">' +
                        '<div class="table-list full-width info-row">' +
                        '<div class="cell">' +
                        '<div class="info-row amenities">' +
                        '<p style="color:#8c8c8c;" ><span class="h-beds">Alcobas:' + data.Inmuebles[pos].Alcobas + '</span><span class="h-baths">Baños: ' + data.Inmuebles[pos].banios + '</span><span class="h-area">Area:' + data.Inmuebles[pos].AreaConstruida + 'm<sup>2</sup>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="cell">' +
                        '<div class="phone">' +
                        '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="btn btn-danger"> Ver inmueble<i class="fa fa-angle-right fa-right"></i></a>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }
                if (localStorage.getItem("total") == 0) {
                    $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de 1")
                } else {
                    $(".pagina").html("pagina " + data.datosGrales.pagina_actual)
                }
                $("#inmb").append(res)
            }

        });
        validar()
    } else {
        var premin = parseInt(localStorage.getItem("precio")) - parseInt(localStorage.getItem("precio") * 0.2);
        var premax = parseInt(localStorage.getItem("precio1")) + parseInt(localStorage.getItem("precio1") * 0.2);
        $.ajax({
            url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/' + localStorage.getItem("ciudad") + '/zona/0/barrio/' + localStorage.getItem("zona") + '/tipoInm/' + localStorage.getItem("tipo") + '/tipOper/' + localStorage.getItem("gestion") + '/areamin/0/areamax/0/valmin/' + premin + '/valmax/' + premax + '/campo/fecha/order/desc/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117'));
            },
            'dataType': "json",
            success: function (data) {
                var res = " ";
                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#inmb").append(res);
                    $("#siguiente").css("display", "none");
                    $("#anterior").css("display", "none");
                    return;

                } else {
                    localStorage.setItem("total", data.datosGrales.fin);
                    for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
                           
                        res += '<div class="col-md-4 col-sm-6 col-xs-12 col-techo">' +
                            '<div id="ID-416" class="item-wrap">' +
                            '<div class="property-item item-grid">' +
                            '<div class="figure-block">' +
                            '<figure class="item-thumb">' +
                            '<span class="label-featured label label-success">' + data.Inmuebles[pos].Tipo_Inmueble + '</span>' +
                            '<div class="label-wrap label-right hide-on-list">' +
                            '<span class="label-status label-status-8 label label-default"><a href="status/for-rent/index.html">' + data.Inmuebles[pos].Gestion + '</a></span> </div>' +
                            '<div class="price hide-on-list">';
                        if (data.Inmuebles[pos].Gestion == "Arriendo") {
                            res += '<span class="item-price label label-success">$' + data.Inmuebles[pos].Canon + '</span> </div>';
                        } else if (data.Inmuebles[pos].Gestion == "Arriendo/venta") {
                            res += '<span class="item-price label label-success">$' + data.Inmuebles[pos].Canon + '</span> </div>' +
                                '<div class="arr-venta hide-on-list"><span class="item-price arr-venta-label label label-success">$' + data.Inmuebles[pos].Venta + '</span> </div>';
                        } else {
                            res += '<span class="item-price label label-success">$' + data.Inmuebles[pos].Venta + '</span> </div>';
                        }
                        res += '';

                        if (data.Inmuebles[pos].foto1 != "") {
                            res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"><img src="' + data.Inmuebles[pos].foto1 + '"  alt="" class="imagen_inmo" id="pos'+pos+'" ><span class="marcaagua"><img src="images/marca_de_agua.png" /></span></a>';
                        } else {
                            res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"><img src="images/no_image.png" alt="" style="height:300px"><span class="marcaagua"><img src="images/marca_de_agua.png" /></span></a>';
                        }
                        res += '</figure>' +
                            '</div>' +
                            '<div class="item-body">' +
                            '<div class="body-left">' +
                            '<div class="info-row">' +
                            '<h3 style="float: right;margin-top: -5px;" class="property-title"><a href="detalle-inmuebles.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">Codigo: ' + data.Inmuebles[pos].Codigo_Inmueble.slice(-3) + '</a></h3>' +
                            '<h3 class="property-title"><a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' + data.Inmuebles[pos].Barrio + '</a></h3><address class="property-address">' + data.Inmuebles[pos].Ciudad + ", " + data.Inmuebles[pos].Departamento + '</address> </div>' +
                            '<div class="buttons">' +
                            '<div class="table-list full-width info-row">' +
                            '<div class="cell">' +
                            '<div class="info-row amenities">' +
                            '<p style="color:#8c8c8c;" ><span class="h-beds">Alcobas:' + data.Inmuebles[pos].Alcobas + '</span><span class="h-baths">Baños: ' + data.Inmuebles[pos].banios + '</span><span class="h-area">Area:' + data.Inmuebles[pos].AreaConstruida + 'm<sup>2</sup>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="cell">' +
                            '<div class="phone">' +
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="btn btn-danger"> Ver inmueble<i class="fa fa-angle-right fa-right"></i></a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                            var id = '#pos'+pos;
                            console.log(id);
                            getMeta(data.Inmuebles[pos].foto1, id);
                    }
                    if (localStorage.getItem("total") == 0) {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de 1")
                    } else {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                    }
                    

                    validar()
                    $("#inmb").append(res)
                }
            }

        });

    }
}

function validar() {
    if (localStorage.getItem("total") == localStorage.getItem("count")) {
        $("#siguiente").css("display", "none");
    } else {
        $("#siguiente").css("display", "block");
    }

    if (localStorage.getItem("count") == 1) {
        $("#anterior").css("display", "none");
    } else {
        $("#anterior").css("display", "inline-flex");
    }
}

function getMeta(url, id) {
    var img = new Image();
    img.addEventListener("load", function () {
        var alto = this.naturalHeight;
        var ancho = this.naturalWidth;
        var total =alto / ancho;
        if(total>1){
            $(id).css('object-fit', 'contain');
        }else{
            $(id).css('object-fit', 'cover');
        }
    });
    img.src = url;
}


