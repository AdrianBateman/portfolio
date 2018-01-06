<?php
$name 		= filter_input(INPUT_POST, "formName", FILTER_SANITIZE_STRING);
$email 		= filter_input(INPUT_POST, "formEmail", FILTER_SANITIZE_EMAIL);
$message 	= filter_input(INPUT_POST, "formMessage", FILTER_SANITIZE_STRING);
$honeyPot 	= filter_input(INPUT_POST, "formEmail2", FILTER_SANITIZE_STRING);

if (( $honeyPot != "" ) || ( $honeyPot != NULL ) ){
	header("Location: http://a-bateman.co.uk/");
	exit;
}

if (( $name == "" ) || ( $name == NULL ) ){
	header("Location: http://a-bateman.co.uk/");
	exit;
}

if (( $email == "" ) || ( $email == NULL ) ){
	header("Location: http://a-bateman.co.uk/");
	exit;
}

if (( $message == "" ) || ( $message == NULL ) ){
	header("Location: http://a-bateman.co.uk/");
	exit;
}


$to = "adrian@a-bateman.co.uk";
$subject = "A New message from your Website";
$txt = "This message is from " . $name . "\r\n";
$txt .= $message;

$headers = "From: adrian@a-bateman.co.uk" ;

mail($to,$subject,$txt,$headers);

header("Location: http://a-bateman.co.uk/");
exit;
 
?>