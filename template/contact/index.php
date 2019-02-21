<?php
/**
 * This example shows making an SMTP connection with authentication.
 */
//include '../includes/db.inc.php';
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that


if (isset($_POST['myfname']) AND empty($_POST['honeypot']))
  {
	$fname = $_POST['myfname'];
	$email = $_POST['myemail'];
	$comments = $_POST['mycomments'];
	
date_default_timezone_set('Etc/UTC');

require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.chrisbickel.webhostingforstudents.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "phpmailer225@chrisbickel.webhostingforstudents.com";
//Password to use for SMTP authentication
$mail->Password = "Lab#9cas225";
//Set who the message is to be sent from
$mail->setFrom('phpmailer225@chrisbickel.webhostingforstudents.com', 'Ace in the Hole');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@ace.com', 'Customer Service');
//Set who the message is to be sent to
$mail->addAddress('phpmailer225@chrisbickel.webhostingforstudents.com', 'Ace Contact');
//Set the subject line
$mail->Subject = 'PHPMailer PHT Contact';

$mail->isHTML(true);
$mail->Body='Name: '.$_POST['myfname'].'<br>
			Email: '.$_POST['myemail'].'<br>
			Message: '.$_POST['mycomments'].'<br>';
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    }
	include 'success.html.php';
	}
else {
	include 'contact.html.php';
	}