<?php
	$name= $_Post['email'];
	$visitor_email =$_Post['email'];
	$mesage= $_Post['message'];


	$email_form = 'ettahra.loukch@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name. \n".
	                 "User Email: $visitor_email.\n".
	                   "User Message: $message.\n";


	$to = "e.loukch@mundiapolis.ma";

    $headers = "From: vemail_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    ?>
