<?php

$message = "Message Test";
$to = "feliciax@mail.ru";
$from = "vasile.andruscenco@gmail.com";
$subject = "Title of message";

$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);




?>