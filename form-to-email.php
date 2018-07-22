<?php
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'yourname@yourwebsite.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $first_name $last_name.\n".
                            "Here is the message:\n $message".



  $to = "contact@dragosnicu.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>
