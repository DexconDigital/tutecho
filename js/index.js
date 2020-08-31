var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5baa40dab156da713cb3cab5/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
var footer = ' <div class="agileits-services" style="margin-left:  33px;">' +
    ' <div class="row" style="margin-bottom: 37px;" >' +
    ' <h3 class="w3-title text-center"></h3>' +
    ' <div class="col-md-2 col-sm-2 col-xs-3 w3_agileits-contact-left" id="footer-right">' +
    ' <ul style="list-style:none;line-height: 40px;" id="contact1" style="right: -95px;">' +
    ' <li style="font-family: Calibri, sans-serif;"><a href="tel:(031)6208801" data-toggle="modal"><i class="fa fa-phone"></i> +571 6208801</a></li>' +
    ' <li style="font-family: Calibri, sans-serif;"><a href="tel:3112226222" data-toggle="modal"><i class="fa fa-phone"></i> 311-222-6222</a></li>' +
    ' <li style="font-family: Calibri, sans-serif;"><a href="tel:3112003333" target="_blank"><i class="fa fa-phone"></i> 311-200-3333</a></li>' +
    ' </ul>' +
    ' <div class="clearfix"></div>' +
    ' </div>' +
    ' <div class="col-md-3 col-sm-3 col-xs-3 w3_agileits-contact-left" id="footer-right">' +
    ' <ul style="list-style:none;line-height: 40px;" id="contact1" style="right: -95px;">' +
    ' <li style="font-weight: 600;font-family: Calibri, sans-serif;"><a href="mailto:info@tutecho.net"><i class="fa fa-envelope"></i> info@tutecho.net</a></li>' +
    ' <li style="font-weight: 600;font-family: Calibri, sans-serif;text-transform:none;"><i class="fa fa-map-marker"></i> Ave.19 No. 118-95 Of.315, Bogotá, Colombia</li>' +
    ' <li style="font-weight: 600;font-family: Calibri, sans-serif;"><i class="fa fa-clock-o"></i> Horario: Lunes a Viernes de 8:00am - 6:00pm</li>' +
    ' <div class="clearfix"></div>' +
    ' </div>' +
    ' <div class="col-md-2 col-sm-2 col-xs-2 w3_agileits-contact-left" id="footer-right">' +
    ' <h3 style="color:#fff"> Servicios</h3>' +
    ' <ul style="list-style:none;line-height: 30px;" id="contact1" style="right: -95px;">' +
    ' <li><a href="http://www.unifianza.com.co/" target="blank" style="text-transform:  capitalize; color:#fff;font-family: Calibri, sans-serif;">Unifianza</a></li>' +
    ' <li><a href="https://www.sura.com/seguro-arrendamiento/default.aspx" target="blank" style="text-transform:  capitalize; color:#fff;font-family: Calibri, sans-serif;">Suramericana Sura</a></li>' +
    ' <li><a href="http://www.shd.gov.co/shd/contribuyentes" target="blank" style="text-transform:  capitalize; color:#fff;font-weight: 600;font-family: Calibri, sans-serif;">Prediales</a></li>' +
    ' <li><a href="https://www.notariavirtual.com/" target="blank" style="text-transform:  capitalize; color:#fff;font-family: Calibri, sans-serif;">Notarias</a></li>' +
    ' <li><a href="https://www.certificadodetradicionylibertad.com/" target="blank" style="color:#fff;font-family: Calibri, sans-serif;">Certificados de Libertad</a></li>' +
    ' <div class="clearfix"></div>' +
    ' </div>' +
    ' <div class="col-md-5 col-sm-7 col-xs-6 contact-right-w3l" style="margin-left: -44px;">' +
    ' <div name="contact-form" method="post" id="contact-form">' +
    ' <input class="name" name="nombre" placeholder="Nombre" id="nombre" required="" style="width:100%" type="text">' +
    ' <input class="name" name="email" placeholder="Correo electrónico" id="email" required="" type="email">' +
    ' <input class="name" name="asunto" placeholder="Asunto" id="asunto" required="" type="text">' +
    ' <textarea placeholder="Mensaje" name="mensaje" id="mensaje" required=""></textarea>' +
    ' <button class="btn btn-danger" type="submit" class="submit" value="Enviar" id="contactform"  onclick="enviar()" style="width: 30%;height: 50px;font-size: 20px;border-radius: 10px;padding: 0;margin: 10px 0 0 0;">Enviar</button>' +
    '<h3 id="politica-pos" style="float:right;">' +
    '<a download href="POLITICAS_DE_PRIVACIDAD.PDF" style="color: #fff;font-size: 15px;font-family: Calibri, sans-serif;"><i class="fas fa-file-pdf"></i> Descargue nuestra política de datos</a>' +
    '</h3>' +
    ' <p style="font-size:12px;color:#fff;" id="pos-copyrig">© 2018 tutecho.net' +
    ' <a style="color:#fff;text-transform:none" href="http://dexcondigital.com/" target="_blank" >diseñado por Dexcon Digital</a>' +
    ' </p>' +
    ' </div>' +
    ' </div>' +
    ' <div class="clearfix"></div>' +
    ' </div>' +
    ' </div>' +
    /*' <div class="col-md-12 col-xs-12 col-sm-12" style="margin-left: -23px; margin-right: -23px; width: 100%; " id="footer-aling">'+
    ' <div class="container" style="margin-top: 11px;">' +
    ' <div class="row">' +
    ' <div class="col-md-6 col-sm-4 col-xs-5 agileinfo-logo" id="aling-logo">' +
    ' <a href="#">' +
    ' <img class="img-responsive" src="images/tutecho1.png" alt="" id="img-aling">' +
    ' </a>' +
    ' </div>' +
    ' <div class="col-md-6 col-sm-8 col-xs-7 agileinfo-copyright">' +
   
    ' </div>' +
    ' </div>' +
    ' </div>' +*/
    ' </div>' +
    ' </div>' +
    '</div>' +
    '</div>';

$(".agileits_w3layouts-footer").html(footer)

var search = '<div class="" style="position:fixed;background: white;padding: 0px;width: 100%;bottom: 0;z-index:500" id="search-top">' +
    '<div>' +
    '<div class="row">' +
    '<div style="padding:15px 5px 5px 5px;border-radius: 20px;">' +
    '<div class="col-md-12 col-xs-12" style="left: 3%;">' +
    '<div class="form-group no-margin">' +
    '<div class="col-md-1 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">' +
    '<div class="form-group">' +
    '<input class="form-control codeInm" type="number" data-live-search="true"  data-width="100%" data-toggle="tooltip" placeholder="Código" >' +
    '</div>' +
    '</div>' +
    '<div class="col-md-2 wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">' +
    '<div class="form-group">' +
    '<select class="form-control operacion" data-live-search="true"  data-width="100%" data-toggle="tooltip" title="Select" >' +
    '<option value="0"> Operación </option>' +
    '</select>' +
    '</div>' +
    '</div>' +
    '<div class="col-md-2  wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="400ms">' +
    '<div class="form-group">' +
    '<select class="form-control inmueble" data-live-search="true"  data-width="100%" data-toggle="tooltip" title="Select">' +
    '<option value="0">Tipo de Inmueble</option>' +
    '</select>' +
    '</div>' +
    '</div>' +
    '<div class="col-md-1  wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="100ms">' +
    '<div class="form-group">' +
    '<select class="form-control ciudad" id="select-ciudades" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">' +
    '</select>' +
    '</div>' +
    '</div>' +
    '<div class="col-md-1 wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">' +
    '<div class="form-group">' +
    '<select class="form-control zona" id="select-barrios" data-live-search="true"  data-width="100%" data-toggle="tooltip" title="Select">' +
    '<option value="0"> Barrio </option>' +
    '<option value="2095">Antiguo country</option>' +
    '<option value="6040">Barrancas</option>' +
    '<option value="515">Belalcazar</option>' +
    '<option value="49">Bella suiza</option>' +
    '<option value="51">Bosque medina</option>' +
    '<option value="1111718">Bosques de marques</option>' +
    '<option value="6245">Bulevar de bolivia</option>' +
    '<option value="749">Calatayud</option>' +
    '<option value="32">Cedritos</option>' +
    '<option value="33">Cedro bolivar</option>' +
    '<option value="6256">Centro</option>' +
    '<option value="5181">Centro internacional</option>' +
    '<option value="1111193">Cerros de  suba</option>' +
    '<option value="2077">Chapinero alto</option>' +
    '<option value="2108">Chapinero central</option>' +
    '<option value="2064">Chicó alto</option>' +
    '<option value="2605">Chico museo</option>' +
    '<option value="2606">Chico navarra</option>' +
    '<option value="2096">Chicó norte</option>' +
    '<option value="2097">Chicó norte ii</option>' +
    '<option value="2098">Chicó norte iii</option>' +
    '<option value="2062">ChicÓ reservado</option>' +
    '<option value="543">Ciudad salitre nororiental</option>' +
    '<option value="761">Colina campestre</option>' +
    '<option value="629">Conjunto residencial alamedas de sa</option>' +
    '<option value="2572">El lago</option>' +
    '<option value="2604">El nogal</option>' +
    '<option value="2066">El refugio</option>' +
    '<option value="2101">El retiro</option>' +
    '<option value="2607">El virrey</option>' +
    '<option value="2080">Emaus</option>' +
    '<option value="1962">Fontibon centro</option>' +
    '<option value="570">Guaymaral</option>' +
    '<option value="574">Hacienda san sebastian  pl. 2 de 3</option>' +
    '<option value="4277">Hayuelos</option>' +
    '<option value="101">Jorge eliecer gaitan</option>' +
    '<option value="2608">La cabrera</option>' +
    '<option value="2067">La cabrera el refugio</option>' +
    '<option value="70">La calleja</option>' +
    '<option value="71">La carolina</option>' +
    '<option value="94">La castellana</option>' +
    '<option value="2024">La merced</option>' +
    '<option value="2084">La salle</option>' +
    '<option value="743">Lagos de cordoba la alhambra</option>' +
    '<option value="42">Lisboa</option>' +
    '<option value="880">Los andes</option>' +
    '<option value="4270">Los lagartos</option>' +
    '<option value="2068">Los rosales</option>' +
    '<option value="107">Metropolis</option>' +
    '<option value="2145">Minuto de dios</option>' +
    '<option value="818">Mirador de suba</option>' +
    '<option value="45">Montearroyo</option>' +
    '<option value="2004">Montevideo</option>' +
    '<option value="772">Niza suba</option>' +
    '<option value="525">Palermo</option>' +
    '<option value="577">Parque comercial bima</option>' +
    '<option value="737">Pasadena</option>' +
    '<option value="127">Polo club</option>' +
    '<option value="2105">Porciuncula</option>' +
    '<option value="775">Provenza</option>' +
    '<option value="2106">Quinta camacho</option>' +
    '<option value="9169">Rincon del chico</option>' +
    '<option value="2221">San basilio engativa</option>' +
    '<option value="2027">San diego</option>' +
    '<option value="130">San felipe</option>' +
    '<option value="585">San jose de bavaria</option>' +
    '<option value="9505">San jose de fontibon</option>' +
    '<option value="2028">San martin</option>' +
    '<option value="86">San patricio</option>' +
    '<option value="63">Santa ana</option>' +
    '<option value="87">Santa barbara</option>' +
    '<option value="65">Santa barbara alta</option>' +
    '<option value="88">Santa barbara central</option>' +
    '<option value="80">Santa barbara occidental</option>' +
    '<option value="66">Santa barbara oriental</option>' +
    '<option value="2575">Santa paula</option>' +
    '<option value="8684">Santa teresa torcoroma</option>' +
    '<option value="528">Teusaquillo</option>' +
    '<option value="11">Toberin</option>' +
    '<option value="6223">Unicentro</option>' +
    '<option value="68">Usaquen</option>' +
    '<option value="1111948">Zona franca fontibon</option>' +
    '</select>' +
    '</div>' +
    '</div>' +
    '<div class="col-md-1  wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">' +
    '<div class="form-group">' +
    '<input class="form-control priceInm"  data-live-search="true"  data-width="100%"  data-toggle="tooltip" placeholder="Precio Min" >' +
    '</div>' +
    '</div>' +
    '<div class="col-md-1  wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="300ms">' +
    '<div class="form-group">' +
    '<input class="form-control priceInm2"  data-live-search="true"  data-width="100%" data-toggle="tooltip" placeholder="Precio Max" >' +
    '</div>' +
    '</div>' +
    '<div class="col-md-2 col-lg-1 wow fadeInDown col-sm-4 col-xs-12" data-wow-offset="200" data-wow-delay="500ms">' +
    '<div class="form-group">' +
    '<button type="submit"  class="btn btn-block btn-submit ripple-effect btn-theme search-1" id="boton" style="font-size: 12px;">Buscar</button>' +
    '</div> ' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '</div>' +
    '<script src="js/search.js"></script>';

$(".agileits_w3layouts-search").html(search)

function enviar() {
    var email = $("#email").val();
    var nombre = $("#nombre").val();
    var mensaje = $("#mensaje").val();
    var asunto = $("#asunto").val();
    $.ajax({
        url: "js/mail.php",
        type: "POST",
        data: {
            email: email,
            nombre: nombre,
            asunto: asunto,
            mensaje: mensaje
        },
        dataType: "html",
        success: function (data) {
            console.log(data)
            console.log("sending...");
            var x = Math.random();
            if (data == 1) {
                alert("Mensaje enviado");

                $("#email").val("");
                $("#nombre").val("");
                $("#asunto").val("");
                $("#mensaje").val("");


            }
        }
    });
    return false;
}

document.addEventListener("keydown", function (event) {
    if(event.keyCode==13){
        document.getElementById("boton").click();
    }
});