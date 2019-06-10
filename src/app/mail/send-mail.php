<?php
$name = $_POST['name'];
$tel = $_POST['tel'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);

$name = urldecode($name);
$tel = urldecode($tel);

$name = trim($name);
$tel = trim($tel);

if (mail("asmoday2011666@mail.ru",
    "Заявка с сайта",
    "Имя: ".$name. "\nТелефон: ".$tel))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}