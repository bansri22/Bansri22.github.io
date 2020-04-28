<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone =$_POST['phone'];
	$message = $_POST['msg'];
	
	$to = "bansrishah2@gmail.com";
	$email_subject = "Website Contact Form:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: ".$email;
	
	$mail_status = mail($to,$email_subject,$email_body,$headers);

	header("location:sucessful_email.html");
}
        
?>