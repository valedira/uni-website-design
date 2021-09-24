<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourvalentina.com'

$email_subject = 'New Form Submission'

$email_body = "user Name: $name.\n"
                "user Email: $visitor_email.\n"
                 "user Name: $subject.\n"
                "user Name: $message.\n"

$to = 'odiraoliobi@gmail.com';

$header = "from: $email_from \r\n";

$headers = "Reply-To: $email_from \r\n";

email($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>