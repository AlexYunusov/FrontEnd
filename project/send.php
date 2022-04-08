<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);

$name = urldecode($name);
$tel = urldecode($tel);
$email = urldecode($email);

$name = trim($name);
$tel = trim($tel);
$email = trim($email);

if (mail("https://60376bfd5435040017722533.mockapi.io/form", "Имя:".$name.". Телефон:".$tel ". E-mail:" .$email \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>