<?php
$telephone = $_POST['telephone'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$messageuser = $_POST['message-user'];
// mail("i_blade_runner_2i@mail.ru", "Сообщение с сайта", "Телефон:".$telephone.". Имя: ".$firstname.". Фамилия: ".$lastname.". Сообщение: ".$messageuser ,"From: nikki2dub@gmail.com \r\n");
if (mail("i_blade_runner_2i@mail.ru", "Сообщение с сайта", "Телефон:".$telephone.". Имя: ".$firstname.". Фамилия: ".$lastname.". Сообщение: ".$messageuser ,"From: nikki2dub@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>
?>