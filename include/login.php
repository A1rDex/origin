<?php
require_once('db.php');

$email=$_POST['email'];

$sql = "SELECT * FROM `users` WHERE `e-mail` = '$email'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        echo 'Привет, '. $row['name'];
    }
}else {
    echo "пользователь не найден";
}
?>