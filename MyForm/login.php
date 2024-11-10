<?php
global $conn;
require_once('db.php');
$name = $_POST['name'];
$pass = $_POST['pass'];

if(empty($name) || empty($pass)){
    echo "One of the fields is empty";
}else{
    $sql = "SELECT * FROM `Form` WHERE name = '$name' AND password = '$pass' ";
        $result = $conn->query($sql);
        //усли резальт получает строку (1)
        if($result->num_rows > 0){
            echo "You have successfully logged into your account ";
            echo $name;
        }else{
            echo "This user does not exist";
        }
}
//echo $name;