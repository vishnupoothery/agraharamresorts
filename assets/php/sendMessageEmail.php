<?php

$Config = include("Config.php");
$EMAIL_USERNAME = $Config['EMAIL_USERNAME'];

$name = trim($_POST['Name']);
$emailAddress = strtolower(trim($_POST['Email']));
$phoneNumber = trim($_POST['PhoneNumber']);
$message = trim($_POST['Message']);

$header = "From:'Agraharam Resort Contact Portal' <$EMAIL_USERNAME> \r\n";
$header .= "Reply-To: '$name' <$emailAddress>\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$subject = 'Website Message From ' . $name;

$body = '<p>This is an automated mail send from Contact Us portal in Agraharam Resort portal.</p><br><strong>Name: </strong>'.$name.'<br><strong>Email Address: </strong>'.$emailAddress.'<br><strong>Phone Number: </strong>'.$phoneNumber.'<br><strong>Message: </strong>'.$message;

if (!mail ('reservation.agraharam@gmail.com',$subject,$body,$header)) {
    echo 'Message could not be sent.';
}
else {
    echo 'Success';
}
