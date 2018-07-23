<?php

$recepient = "mertsso2004@gmail.com";
$sitename = "PersonalVov.am";

$name = trim($_POST["Name"]);
$phone = trim($_POST["Email"]);
$text = trim($_POST["Maseege"]);
$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
