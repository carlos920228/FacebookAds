<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "noreply@dannyyesoft.mx";
    $to = "cromero@dannyyesoft.mx, carlos.romero@iuv.edu.mx";
    $subject = "Tienes un nuevo lead";
    $message = "Tienes un nuevo lead, por favor ve a tu portal de seguiento";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>