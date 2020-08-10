<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$Phone_no = $_POST['Phone_no'];
$city = $_POST['city'];
$date = $_POST['date(format)'];
$address = $_POST['address'];


$email_form = 'jayarajb33@gmail.com';

$email_subject ="New Form Submission";

$email_body = "user Name: $name.\n".
               "User Email: $visitor_email.\n".
               "user Phone_no: $Phone_no.\n".
               "user Name: $name.\n".
               "dat: $date(format).\n".
               "User address: $address.\n";

$to = "jayarajb33@gmail.com";

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: userdata.html");  


?>