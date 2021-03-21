<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $fakultet = $_POST['fakultet'];
    $rokovi = $_POST['rokovi'];
    $predmet = $_POST['predmet'];
    $mail = $_POST['mail'];

    $mail_to = "fortest697@yahoo.com";
    $header = "Prijave";
    $message = $name . $fakultet . $rokovi . $predmet;
    mail($mail_to, $header, $message );
}

?>