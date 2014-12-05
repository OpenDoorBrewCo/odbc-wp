<?php

require_once('class.phpmailer.php');

// Check if the "from" input field is filled out
	$from = "technical@opendoorbrewco.com"; // sender
	$to = "technical@opendoorbrewco.com";
	$subject = "Contact Message";
	$message = $_POST["message"];
	// message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);
	
	
	// send mail
	// mail($to,$subject,$message,"From: $from\n");
	// echo "Thank you for sending us feedback";
	
	
	
	
	
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "technical@opendoorbrewco.com";
	$mail->Password = "0p3nD0or1401";
	$mail->SetFrom("technical@opendoorbrewco.com");
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AddAddress("technical@opendoorbrewco.com");
 // if(!$mail->Send())
    // {
    // echo "Mailer Error: " . $mail->ErrorInfo;
    // }
    // else
    // {
    // echo "Message has been sent";
    // }
	header("Location: /?page_id=44 ",303);
	exit();
?>	