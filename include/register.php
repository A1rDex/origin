<?php

require_once('db.php');

$name=$_POST['name'];
$secondname=$_POST['secondname'];
$email=$_POST['email'];
$phone=$_POST['phone'];


if(empty($name) || empty($secondname) || empty($email) || empty($phone)){
    echo "заполните все поля";
};

$sql = "INSERT INTO `users` (`name`,`secondname`,`e-mail`,`phone`) VALUES ('$name','$secondname','$email','$phone')";

if($conn -> query($sql)){
    echo "Успешная регистрация";
}else{
    echo 'Ошибка' . $conn->error;
}

?>