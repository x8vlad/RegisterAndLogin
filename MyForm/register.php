<?php
global $conn;
require_once('db.php');
/*
else{
    /*
    echo $name;
    echo $mail;
    echo $pass;
    //
echo "<h1> Вы успешно зарегестрировались..</h1>";
}
 */

$name = htmlspecialchars(trim($_POST['name']));
$mail = htmlspecialchars(trim($_POST['mail']));
$pass = htmlspecialchars(trim($_POST['pass']));

/*
    echo $name;
    echo $mail;
    echo $pass;
*/
if(empty($name) || empty($mail) || empty($pass)){
    echo "One of the fields is empty";
}
else{
    $sql= "INSERT INTO `Form` (`name`, `email`, `password`) VALUES ('$name', '$mail', '$pass')";

    $conn->query($sql);
//    ("INSERT INTO `Form`
//    (`name`, `email`, `password`)
//VALUES
//    ('$name', '$mail', '$pass')
//");
}