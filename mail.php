<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = "rajattripathi243@gmail.com";
$subject = "Mail From My Portfolio";
$txt = "First Name ". $firstname . "\r\n Last Name = " . $lastname . "\r\n Email = " . $email . "\r\n Phone = " . $phone . "\r\n Message = " . $message;
$headers = "From: noreply@rajat.soumojit.in" . "\r\n" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
?>