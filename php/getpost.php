<?php
$name=$_POST['text'] ?? '';
$email=$_POST['email'] ?? '';
$textarea=$_POST['textarea'] ?? '';

echo "Пришло сообщение от \"".$name."\" с почты: \"".$email."\" с текстом: \"".$textarea."\"";
?>
