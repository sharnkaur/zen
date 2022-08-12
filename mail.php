<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$mobileno= $_POST['mobileno'];
$message= $_POST['message'];
$to = "saini.sharn57@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile =" . $mobileno .  "\r\n Message = ". $message;
$headers = "From: noreply@zenextion.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>