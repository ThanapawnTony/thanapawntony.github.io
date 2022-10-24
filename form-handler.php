<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@kindergarten.epizy.com';

$email_subject = 'Neww Form SUbmission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Under Message: $message.\n";

$to = 'thanaphonepun@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");


?>