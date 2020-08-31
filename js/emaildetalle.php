<?php

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['url_inm'])     ||
   empty($_POST['message'])   ||
   empty($_POST['mailasesor'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$name_envia = strip_tags(htmlspecialchars($_POST['name_envia']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$nameasesor = strip_tags(htmlspecialchars($_POST['name']));
$name_enviaasesor = strip_tags(htmlspecialchars($_POST['name_envia']));
$email_addressasesor = strip_tags(htmlspecialchars($_POST['email']));
$messageasesor = strip_tags(htmlspecialchars($_POST['message']));
$mailasesor = strip_tags(htmlspecialchars($_POST['mailasesor']));

// Create the email and send the message
$to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Inmueble compartido desde Tu Techo";
$email_body = "Hola ".$name.", \n\n".$name_envia." te ha compartido este inmueble:\n\n".$_POST['url_inm']."\n\nMensaje: ".$message;
$headers = "From: noreply@tutecho.net\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address".
$headers .= 'X-Mailer: PHP/' . phpversion(); 
mail($to,$email_subject,$email_body,$headers);

$toasesor = $mailasesor; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subjectasesor = "Inmueble compartido desde Tu Techo";
$email_bodyasesor = "Hola ".$nameasesor.", ha compartido este inmueble a ".$name_enviaasesor.":\n\n".$_POST['url_inm']."\n\n"."Enviado al correo:".$email_addressasesor."";
$headersasesor = "From: noreply@tutecho.net\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headersasesor .= "Reply-To: $mailasesor".
$headersasesor .= 'X-Mailer: PHP/' . phpversion(); 
mail($toasesor,$email_subjectasesor,$email_bodyasesor,$headersasesor);
echo 1;

?>
