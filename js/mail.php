<?php
if (isset($_POST['email'])) {

	$nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    
	$email_from = "noreply@tutecho.net";
	$email_to = "Jmunoz@tutecho.net";

	$message = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">'.
	'<title>Correo desde la Web de Conaltura</title>'.
	'</head>'.
	'<body>'.
	'<p>Este correo se ha inscrito desde la Web de Tu Techo:</p>'.
        '<p>'.'Nombre: ' . $nombre .'</p>'.
        '<p>'.'Email : ' . $email . '</p>'.
        '<p>'.'Asunto : ' . $asunto . '</p>'.
         '<p>'.'Mensaje : ' . $mensaje .'</p>'.
	'</body>'.
	'</html>';
	

	
	// create email headers
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'Reply-To:'. $email_from . "\r\n" .
			'From:' . $email_from . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	$email = @mail($email_to, $asunto, wordwrap($message), $headers);

	if ($email) {
			echo 1;
	} else {
			echo 2;
	}
} else {
	echo 2;
}
?>