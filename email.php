<?php
if(!empty($_POST['submit'])){
    $userName = $_POST['name'];
    $userTitle = $_POST['title'];
    $userMail = $_POST['email'];
    $userNumber = $_POST['number'];
    $userNote = $_POST['note'];
    $toMail = $_POST['mahmoudabdelhay41@gmail.com'];

    $mailHeaders = "Name: " . $userName .
    "\r\n Email: " . $userMail .
    "\r\n Title: " . $userTitle .
    "\r\n Number: " . $userNumber .
    "\r\n Note: " . $userNote . "\r\n";

    if(mail($toMail, $userName, $mailHeaders)){
        $message = "Your Information is Received Successfully.";
    }

}
?>