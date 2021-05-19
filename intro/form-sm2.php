<?php 

    header('Access-Control-Allow-Origin: *'); 






    $recepient = "cogito.lutsk@gmail.com";

    $sitename = "Pl-Education";


    $name = trim($_POST["name"]);

    $phone = trim($_POST["telephone"]);

    $email = trim($_POST["email"]);

    $spec = trim($_POST["spec"]);

    $mess = trim($_POST["message"]);






    $message = "Вітаю! Вам залишили заявку з сайту Pl-Education \nІмя: $name \nТелефон: $phone \nБажана спеціальність: $spec \nE-mail: $email \nПовідемлення: $mess" ;



    $pagetitle = "Замовлення консультації \"$sitename\"";

    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");



 ?>