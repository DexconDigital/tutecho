<?php
if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $nombre = $_POST['name'];
    $mensaje = $_POST['message'];
    

   $email_from = "infocomercial@propiedadesycapitales.org";
    //$email_from = "siderenselaestrella@une.net.co";
   // $email_to = "comercial@propiedadesycapitales.org";
   $email_to = "marketing@propiedadesycapitales.org";

   $message = '<html>'.
    '<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">'.
    '<title>Formulario de contacto Web</title>'.
    '</head>'.
    '<body>'.
    '<p>'.'Email del cliente:' . $email . '<br></p>'.
    '<p>'.'Nombre y apellidos del cliente:' . $nombre . '<br></p>'.
    '<p>'.'Telefono de contacto del cliente:' . $telefono . '<br></p>'.
    '<p>'.'Mensaje:' . $mensaje . '<br></p>'.
    '</body>'.
    '</html>';

   // create email headers
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
                'Reply-To:'. $email_from . "\r\n" .
                'From:' . $email_from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $email = @mail($email_to, "Formulario de contacto web", wordwrap($message), $headers);
    if ($email) {
        echo 1;
    } else {
        echo 2;
    }
    
}