<?php

if (isset($_POST['submit'])){

    $name  = $_POST['name'];
    $mailFrom  = $_POST['mail'];
    $subject  = $_POST['subject'];


$mailTo = 'jjaradal@gmail.com';
$headers = 'From: '.$mailFrom;
$txt = "You receive message form: ".$name;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: form.php?mailsend");
}