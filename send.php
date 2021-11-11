<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "2091301170:AAGFAtVKwVncrP7juFTvC9Oi2FTQxpHptBQ";
$chat_id = "1338691940";
$chat_id2 = "225764215";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: +' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
$sendToTelegram2 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id2}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  // echo "Error";
  header('Location: error.html');
}
?>