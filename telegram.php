<?php

/* https://api.telegram.org/bot1729126717:AAH3p26awsYbD6BAEtQQFB0FIq47eBPl-yI/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$token = "1729126717:AAH3p26awsYbD6BAEtQQFB0FIq47eBPl-yI";
$chat_id = "-515702547";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Вопрос' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>