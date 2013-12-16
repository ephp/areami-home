<?php 
$errors = '';
$myemail = 'associazione+contatto@areami.net';
if(empty($_POST['subscribeemail']))
{
$errors .= "\n Error: Required Field";
}

$subscribeemail = $_POST['subscribeemail'];

if (!eregi(
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", 
$subscribeemail))
{
$errors .= "\n Errore: Indirizzo email non valido";
}

if( empty($errors))
{
$to = $myemail;
$subscribeemail_subject = "Iscrizione alla Newsletter di Area[mi]";
$subscribeemail_body = "Richiesta di iscrizione da parte di \n Email: $subscribeemail";
$headers = "From: $subscribeemail";

mail($to, $subscribeemail_subject, $subscribeemail_body, $headers);
}