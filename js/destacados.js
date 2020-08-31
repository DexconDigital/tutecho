setTimeout(function () {
    $.ajax({
        url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/10/limit/1',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117'));
        },
        'dataType': "json",
        success: function (data) {
            var res = "";
            if (data == "Sin resultados") {
                res += '<h1  style="color:red">Inmuebles destacados </h1>';
                $("#property").append(res);
                return;
            } else {
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    res += '<div class="col-md-4 col-sm-6 col-xs-12 col-techo">' +
                        '<div id="ID-416" class="item-wrap">' +
                        '<div class="property-item item-grid">' +
                        '<div class="figure-block">' +
                        '<figure class="item-thumb">' +
                        '<span class="label-featured label label-success">' + data[i].Tipo_Inmueble + '</span>' +
                        '<div class="label-wrap label-right hide-on-list">' +
                        '<span class="label-status label-status-8 label label-default"><a href="status/for-rent/index.html">' + data[i].Gestion + '</a></span> </div>' +
                        '<div class="price hide-on-list">';
                    if (data[i].Gestion == "Arriendo") {
                        res += '<span class="item-price label label-success">$' + data[i].Canon + '</span> </div>';
                    } else if (data[i].Gestion == "Arriendo/venta") {
                        res += '<span class="item-price label label-success">$' + data[i].Canon + '</span> </div>' +
                            '<div class="arr-venta hide-on-list"><span class="item-price arr-venta-label label label-success">$' + data[i].Venta + '</span> </div>';
                    } else {
                        res += '<span class="item-price label label-success">$' + data[i].Venta + '</span> </div>';
                    }
                    res += '';

                    if (data[i].foto1 != "") {
                        res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="' + data[i].foto1 + '"  alt="" class="imagen_inmo" ><span class="marcaagua"><img src="images/marca_de_agua.png" /></span></a>';
                    } else {
                        res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><img src="images/no_image.png" alt="" class="imagen_inmo"><span class="marcaagua"><img src="images/marca_de_agua.png" /></span></a>';
                    }
                    res += '</figure>' +
                        '</div>' +
                        '<div class="item-body">' +
                        '<div class="body-left">' +
                        '<div class="info-row">' +
                        '<h3 class="property-title"><a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '">' + data[i].Barrio + '</a>' +
                        '<h3 style="float: right;margin-top: -5px;" class="property-title"><a href="detalle-inmuebles.php?dt=' + data[i].Codigo_Inmueble.slice(-3) + '">Codigo: ' + data[i].Codigo_Inmueble + '</a></h3>' +
                        '</h3><address class="property-address">' + data[i].Ciudad + ", " + data[i].Departamento + '</address> </div>' +
                        '<div class="buttons">' +
                        '<div class="table-list full-width info-row">' +
                        '<div class="cell">' +
                        '<div class="info-row amenities">' +
                        '<p style="color:#8c8c8c;" ><span class="h-beds">Alcobas:' + data[i].Alcobas + '</span><span class="h-baths">Baños: ' + data[i].banios + '</span><br><span class="h-area">Area Construida: ' + data[i].AreaConstruida + 'm<sup>2</sup>' + '</span><br><span class="h-area">Area Privada: ' + data[i].AreaLote + 'm<sup>2</sup>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="cell">' +
                        '<div class="phone">' +
                        '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" class="btn btn-danger"> Ver inmueble<i class="fa fa-angle-right fa-right"></i></a>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';


                    j++;
                    if (j > 5) {
                        break;
                    }
                }
            }
            $("#property").append(res);

        }

    });
}, 500);
