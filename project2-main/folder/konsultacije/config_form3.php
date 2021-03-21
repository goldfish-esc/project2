<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $professor = $_POST['professor'];
    $description = $_POST['description'];
    $email = $_POST['email'];


    $mail_to = "fortest697@yahoo.com";
    $header = "Konsultacije";
    mail($mail_to, $header,$description);
}


?>