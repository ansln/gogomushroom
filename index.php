<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "gogx1278@gogomushroom.com";
$to = "pijeee07@gmail.com";
$subject = "ini subject";
$message = "Hola Amigos";
$headers = "From: " . $from;
mail($to, $subject, $message, $headers);
echo "The email message was sent.";
?>