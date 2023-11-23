<?php

$to_email = "ecopower.solutions1616@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
/*
session_start();

require('PHPMailer/PHPMailerAutoLoad.php');

  $mail = new PHPMailer;
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = "tls://smtp.gmail.com";
  $mail->Port = 25;
  $mail->Username = "ecopower.solutions1616@gmail.com";
  $mail->Password = "Ecopower1616";
  //Sending the actual email
  $mail->setFrom('ecopower.solutions1616@gmail.com', 'EcopowerSolutions');
  $mail->addAddress($_SESSION['mail_env']);     // Add a recipient
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Notification de Ecopower Solutions';
  $mail->Body = "<html><h2>Hello,</h2><p>Your email has been received  : <br>we will process your request as soon as possible</p></html>";

  if(!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
  }*/
//
// *** To Email ***
/*
$to = $_SESSION['mail_env'];
*///
// *** Subject Email ***
//$subject = 'Notification de Ecopower Solutions';
//


//$content = "<html><h2>Hello,</h2><p>Your email has been received  : <br>we will process your request as soon as possible</p></html>";
//
//*** Head Email ***

//$headers = "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
//$headers .= "From: ecopower.solutions1616@gmail.com\r\n";
//
//*** Show the result... ***
/*if (mail($to, $subject, $content, $headers))
{
	echo "Success !!!";
	header("location: Contact.php");
} 
else 
{
   	echo "ERROR";
}*/