<?php
$receiver = "leonthedragonslayer123@gmail.com";
$subject = "this is a test email";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:sender email address here";

if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>