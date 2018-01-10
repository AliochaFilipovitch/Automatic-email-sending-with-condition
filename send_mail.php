<?php

require('_PHPMailer/PHPMailerAutoload.php');

// Important for your Yahoo account :
// Go to Sign-in & security section in Yahoo
// Scroll down the Password & sign-in method section and turn Off the 2-Step Verification
// Scroll down the Connected apps & sites section and turn On Allow less secure apps

function setupMail() {
  $mail = new PHPMailer;
  $mail->isSMTP();  // Set mailer to use SMTP
  $mail->Host = 'smtp.mail.yahoo.fr';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;   // Enable SMTP authentication
  $mail->Username = 'your-email@yahoo.com';  // SMTP username
  $mail->Password = 'your-password'; // SMTP password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;  
  $mail->SetFrom('your-email@yahoo.com', '');
  $mail->addReplyTo('your-email@yahoo.com', '');
  $mail->WordWrap = 50;   // Set word wrap to 50 characters
  $mail->isHTML(true);  // Set email format to HTML

  $mail->SMTPDebug  = 0;  // enables SMTP debug information (for testing)

  return $mail;
}
