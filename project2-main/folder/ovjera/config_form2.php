<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name1'];
    $name1 = $_POST['name2'];
    $name2 = $_POST['name3'];
    $adress = $_POST['adress'];
    $fakultet = $_POST['fakultet'];
    $smjer = $_POST['smjer'];
    $mail = $_POST['mail'];


    $header = "Konsultacije";
    $mail_to = "fortest697@yahoo.com";

    $message = $name . $name1 . $name2 . $adress . $fakultet . $smjer;
    mail($mail_to, $header, $message);
}

?>