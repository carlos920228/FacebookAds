<?php 
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'crmDanny2020') {
echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));
//Enviar correo
    error_reporting( E_ALL );
    $from = "noreply@dannyyesoft.mx";
    $to = "cromero@dannyyesoft.mx, carlos.romero@iuv.edu.mx";
    $subject = "Tienes un nuevo lead";
    $message = "Tienes un nuevo lead, por favor ve a tu portal de seguiento";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
