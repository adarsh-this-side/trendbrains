<?php
//get data from form  

$name = $_POST['inputName'];
$email= $_POST['inputEmail'];
$phone= $_POST['inputPhone'];
$message= $_POST['inputMessage'];
$to = "adarsh.this.side@gmail.com";
$subject = "Mail From trendbrains";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@hapvey.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:thankyou.html");
?>
