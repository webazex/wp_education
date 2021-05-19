<?php 

    header('Access-Control-Allow-Origin: *'); 






    $recepient = "cogito.lutsk@gmail.com";

    $sitename = "Pl-Education";


    $name = trim($_POST["name"]);

    $phone = trim($_POST["telephone"]);

    $mess = trim($_POST["message"]);






    $message = "Вітаю! Вам залишили заявку з сайту Pl-Education \nІмя: $name \nТелефон: $phone \nПовідемлення: $mess" ;



    $pagetitle = "Замовлення консультації \"$sitename\"";

    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");



 ?>