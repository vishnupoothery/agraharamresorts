<?php

$Config = include("Config.php");
$EMAIL_USERNAME = $Config['EMAIL_USERNAME'];

$name = trim($_POST['Name']);
$emailAddress = strtolower(trim($_POST['Email']));
$phoneNumber = trim($_POST['PhoneNumber']);
$checkInDate = trim($_POST['CheckInDate']);
$checkOutDate = trim($_POST['CheckOutDate']);
$roomType = trim($_POST['RoomType']);

$header = "From:'Agraharam Resort Reservation Portal' <$EMAIL_USERNAME> \r\n";
$header .= "Reply-To: '$name' <$emailAddress>\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$subject = 'Online Reservation For '. $roomType . ' By ' . $name;

$body = '<p>This is an automated mail send from Online Reservation portal in Agraharam Resort.</p><br><strong>Name: </strong>'.$name.'<br><strong>Email Address: </strong>'.$emailAddress.'<br><strong>Phone Number: </strong>'.$phoneNumber.'<br><strong>Check In Date: </strong>'.$checkInDate.'<br><strong>Check Out Date: </strong>'.$checkOutDate.'<br><strong>Room Type: </strong>'.$roomType;

if (!mail ('reservation.agraharam@gmail.com',$subject,$body,$header)) {
    echo 'Message could not be sent.';
}
else {
    echo 'Success';
}