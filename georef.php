<!DOCTYPE html>
<html>
<head>
    <?php
    $id = 0;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height:80%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
        .marcaagua {
            color: #ffffff6e;
            position: absolute;
            bottom: 80px !important;
            left: 74%;
        }
      </style>
  
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s&callback=initMap"async defer></script>

    
</head>
<body>
        <div id="map" style="width: 100%; height: 90%;"></div>

        <script>var ciudad = <?php echo $id?>;</script>
        <script>
        var res_ciudad=11001;
        var operacion;
        var inmueble;
        var barrio;
        var precio1;
        var precio2;
        if(Number.isInteger(parseInt(sessionStorage.getItem("ciudadselect")))){res_ciudad=parseInt(sessionStorage.getItem("ciudadselect"));}
        if(ciudad!= 0){res_ciudad=ciudad;}
        operacion=sessionStorage.getItem("operacionselect");
        inmueble=sessionStorage.getItem("inmuebleselect");
        barrio=sessionStorage.getItem("zonaselect");
        precio1=sessionStorage.getItem("preciogeo1");
        precio2=sessionStorage.getItem("preciogeo2");
        console.log(barrio)
        console.log(res_ciudad)
        console.log(inmueble)
        console.log(operacion)
        console.log(precio1)
        console.log(precio2)
            $.ajax({
            url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/200/departamento/0/ciudad/' + res_ciudad + '/zona/0/barrio/' + barrio + '/tipoInm/' + inmueble + '/tipOper/' + operacion + '/areamin/0/areamax/0/valmin/' + precio1 + '/valmax/' + precio2 + '/campo/0/order/0/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
            xhr.setRequestHeader(
              'Authorization',
              'Basic ' + btoa('Authorization:1GLnhTeCLqZKKTLRulX9nnXQZOTFAN2kEG8CDzjd-117'));
             },
            'dataType': "json",
            success:function(data){
              console.log(data)
                var res= "";
                if(data=="Sin resultados"){
                }else{
                    var infowindow = new google.maps.InfoWindow();
                    var indicator = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    var marker, i, j=0, markers = [];    
                    for (i = 0; i < parseInt(data.Inmuebles.length); i++) {
                        
                        marker = new google.maps.Marker({
                          position: new google.maps.LatLng(data.Inmuebles[i].latitud, data.Inmuebles[i].longitud),
                          map: map
                        });
                        
                        markers.push(marker);
        
                        j++;
        
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent("Codigo Inmueble: "+data.Inmuebles[i].Codigo_Inmueble+
                                "<br><a target='_blank' href='detalle-inmueble.php?dt="+data.Inmuebles[i].Codigo_Inmueble+"'><img src='" + data.Inmuebles[i].foto1 + "' style='width: 200px;height: 170px'  ><span class='marcaagua'><img src='images/marca_de_agua.png' style='width: 60%;'  /></span></a>"+
                                "<br>Barrio: "+
                                data.Inmuebles[i].Barrio+"<br>Tipo De Inmueble: "+data.Inmuebles[i].Tipo_Inmueble+"<br>Gestion: "+data.Inmuebles[i].Gestion+
                                "<br><a  target='_blank' href='detalle-inmueble.php?dt="+data.Inmuebles[i].Codigo_Inmueble+"'>Ver Inmueble</a>");
                              infowindow.open(map, marker);
                            }
                          })(marker, i));                
                    }
                    
                        var mcOptions = {gridSize: 50, maxZoom: 15,imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'};
                                  var markerCluster = new MarkerClusterer(map, markers,mcOptions);
              }
                    
            }
        
            });
        </script>

        <script>
          var map;
          function initMap() {
             
                map = new google.maps.Map(document.getElementById('map'), {
                  center: {lat: 4.732518, lng: -74.061207},
                  zoom: 10
                 
          
            });
          }
        

        </script>
        
    
    

</body>
</html>