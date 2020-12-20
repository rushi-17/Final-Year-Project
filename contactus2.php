<?php
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$message=$_POST['message'];

	$email_from='pandgeprashant@gmail.com';
	$email_subject="New Form Submission";
	$email_body="User Name:$name.\n".
					"User Email:$visitor_email.\n".
							"User Message:$message.\n";


//$to="";
$headers="from:pandgeprashant@gmail.com\r\n";
$headers .="Reply-To:pmayur3257@gmail.com \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contactusnew.html");
?>