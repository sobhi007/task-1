<?php
// $to = "mohamed.sobhi1304@gmail.com";
// $subject = "test";

// $message = 'Dear '."sobhi".',<br>';
// $message .= "We welcome you to be part of family<br><br>";
// $message .= "Regards,<br>";

// // Always set content-type when sending HTML email
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// // More headers
// $headers .= 'From: <mohamed.sobhi1303@gmail.com>' . "\r\n";


// mail($to,$subject,$message,$headers);


$to = 'mohamed.sobhi1304@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: mohamed.sobhi1303@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}
?>