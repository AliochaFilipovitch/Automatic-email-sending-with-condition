<?php

$heure = date("H:i:s");

if ($heure == "11:45:00") {						

	include ('send_mail.php');

	$PHPmail=setupMail();
	$email = "email@email.com" ;

	$PHPmail->addAddress($email);
	$PHPmail->Subject = 'RICARD TIME';
	$PHPmail->Body    = 'Midi moins le quart, l\'heure du ricard!';

	if(!$PHPmail->send()) {
		echo "Oups... Message is not sent.<br>";
		echo 'Mailer Error: '.$PHPmail->ErrorInfo;
		exit;
	} else {
		echo "Good! Message sent.";
	}
}
else {
	echo "Ce n'est pas encore l'heure du ricard.";
}

?>

<br><a href="index.php">Back</a>