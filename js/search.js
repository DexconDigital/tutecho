$(document).ready(function () {
    //guarda el id de los departamentos
    var res = new Array();

    //peticion departamentos
                    //peticion ciudades
    $.ajax({
                        url: "https://www.simi-api.com/ApiSimiweb/response/v2/ciudad/",
                        type: "GET",
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader(
                                "Authorization",
                                "Basic " +
                                btoa("Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117")
                            );
                        },
                        dataType: "json",
                        success: function (data) {
                            console.log(data)
                            
                            var resultado = "";
                            var informacion = (data);
                            for (var i = 0; i < informacion.length; i++) {
                                if (informacion[i].id == 11001) {
                                    resultado += '<option selected value="';

                                } else {
                                    resultado += '<option value="';
                                }
                                resultado += informacion[i].id +
                                    '">' +
                                    informacion[i].nombre +
                                    "</option>";
                            }
                            $(".ciudad").append(resultado);
                        }
                    });


    $(".ciudad").change(function () {

        var res_ciudad = $(".ciudad option:selected").val();

        console.log(window.location.pathname);

        if (window.location.pathname == "/inmuebles.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);
        }
        if (window.location.pathname == "/") {
            sessionStorage.setItem("ciudadselect", res_ciudad);

        }
        if (window.location.pathname == "/index.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);

        }
         if (window.location.pathname == "/nosotros.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);

        }
         if (window.location.pathname == "/servicios.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);

        }
         if (window.location.pathname == "/clientes.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);

        }
         if (window.location.pathname == "/catalogo-virtual.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);

        }
         if (window.location.pathname == "/contactenos.php") {
            sessionStorage.setItem("ciudadselect", res_ciudad);

        }

        $.ajax({
            url: "https://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/" +
                res_ciudad +
                "",
            type: "GET",
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117")
                );
            },
            dataType: "json",
            success: function (data) {
                
                var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
                var informacion = data;
                for (var i = 0; i < informacion.length; i++) {
                    resultado += '<option value="' + informacion[i].id + '">' +
                        informacion[i].nombre +
                        "</option>";
                }

                $(".zona").append("");
                $(".zona").html(resultado);
            }
        });
    });

    //get list of properties
    $.ajax({
        url: "https://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">Tipo de Inmueble</option>';
            var informacion = (data);
            var tipo = localStorage.getItem("tipo");
            for (var i = 0; i < informacion.length; i++) {
                if (tipo == informacion[i].idTipoInm) {
                    resultado +=
                        '<option selected value="' +
                        informacion[i].idTipoInm + '" >' +
                        informacion[i].Nombre +
                        "</option>";
                }
                else {
                    resultado +=
                        '<option value="' +
                        informacion[i].idTipoInm + '">' +
                        informacion[i].Nombre +
                        "</option>";
                }
            }
            $(".inmueble").html(resultado);
        }
    });

    //get list of the transactions
    $.ajax({
        url: "https://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">Operación</option>';
            var operacion = localStorage.getItem("gestion");
            for (var i = 0; i < data.length; i++) {

                if (operacion == data[i].idGestion) {

                    resultado += '<option selected value="' +
                        data[i].idGestion + '">' +
                        data[i].Nombre +
                        "</option>";
                }
                else {
                    resultado += '<option value="' +
                        data[i].idGestion + '">' +
                        data[i].Nombre +
                        "</option>";
                }
            }
            $(".operacion").html(resultado);
        }
    });


    $(".operacion").change(function () {
        var operacion = $(".operacion option:selected").val();
        console.log(operacion)
        console.log(window.location.pathname);

        if (window.location.pathname == "/inmuebles.php") {
             sessionStorage.setItem("operacionselect", operacion);
        }
        if (window.location.pathname == "/") {
             sessionStorage.setItem("operacionselect", operacion);

        }
        if (window.location.pathname == "/index.php") {
             sessionStorage.setItem("operacionselect", operacion);

        }
         if (window.location.pathname == "/nosotros.php") {
             sessionStorage.setItem("operacionselect", operacion);

        }
         if (window.location.pathname == "/servicios.php") {
             sessionStorage.setItem("operacionselect", operacion);

        }
         if (window.location.pathname == "/clientes.php") {
             sessionStorage.setItem("operacionselect", operacion);

        }
         if (window.location.pathname == "/catalogo-virtual.php") {
             sessionStorage.setItem("operacionselect", operacion);

        }
         if (window.location.pathname == "/contactenos.php") {
             sessionStorage.setItem("operacionselect", operacion);

        }


    });

    $(".zona").change(function () {
        var zona = $(".zona option:selected").val();
        console.log(zona)
        console.log(window.location.pathname);
        if (window.location.pathname == "/inmuebles.php") {
            sessionStorage.setItem("zonaselect", zona);
        }
        if (window.location.pathname == "/") {
            sessionStorage.setItem("zonaselect", zona);

        }
        if (window.location.pathname == "/index.php") {
            sessionStorage.setItem("zonaselect", zona);

        }
         if (window.location.pathname == "/nosotros.php") {
            sessionStorage.setItem("zonaselect", zona);

        }
         if (window.location.pathname == "/servicios.php") {
            sessionStorage.setItem("zonaselect", zona);

        }
         if (window.location.pathname == "/clientes.php") {
            sessionStorage.setItem("zonaselect", zona);

        }
         if (window.location.pathname == "/catalogo-virtual.php") {
            sessionStorage.setItem("zonaselect", zona);

        }
         if (window.location.pathname == "/contactenos.php") {
            sessionStorage.setItem("zonaselect", zona);

        }


    });

    $(".inmueble").change(function () {
        var inmueble = $(".inmueble option:selected").val();
        console.log(inmueble)
        console.log(window.location.pathname);
        if (window.location.pathname == "/inmuebles.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);
        }
        if (window.location.pathname == "/") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
        if (window.location.pathname == "/index.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
         if (window.location.pathname == "/nosotros.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
         if (window.location.pathname == "/servicios.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
         if (window.location.pathname == "/clientes.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
         if (window.location.pathname == "/catalogo-virtual.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }
         if (window.location.pathname == "/contactenos.php") {
            sessionStorage.setItem("inmuebleselect", inmueble);

        }


    });


    var cuidad, inmueble, operacion, zona;

    $(".search").click(function () {

        zona = $(".zona option:selected").val();
        inmueble = $(".inmueble option:selected").val();
        ciudad = $(".ciudad option:selected").val();

        operacion = $(".operacion option:selected").val();
        var code = $(".codeInm").val();
        var code1 = $("#codeInm").val();
        var precio = $(".price").val();

        sessionStorage.setItem("preciogeo1", precio);
        sessionStorage.setItem("preciogeo2", precio1);

        if (code !== "") {
            window.location.href = 'detalle-inmueble.php?dt=117-' + code + '';
        } else {
            window.location.href = 'inmuebles.php?gs=' + operacion + '&&ti=' + inmueble + '&&ci=' + ciudad + '&&zo=' + zona + '&&pre=' + precio + '';
        }

    });

    $(".search-1").click(function () {
        zona = $(".zona option:selected").val();
        inmueble = $(".inmueble option:selected").val();
        ciudad = $(".ciudad option:selected").val();
        operacion = $(".operacion option:selected").val();
        var code = $(".codeInm").val();
        var precio = $(".priceInm").val();
        var precio1 = $(".priceInm2").val();
        sessionStorage.setItem("preciogeo1", precio);
        sessionStorage.setItem("preciogeo2", precio1);

        if (code !== "") {
            window.location.href = 'detalle-inmueble.php?dt=117-' + code + '';
        } else {
            window.location.href = 'inmuebles.php?gs=' + operacion + '&&ti=' + inmueble + '&&ci=' + ciudad + '&&zo=' + zona + '&&pre=' + precio + '&&pre1=' + precio1 + '';
        }




    });
});