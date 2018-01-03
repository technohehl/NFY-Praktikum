<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 03.01.2018
 * Time: 10:14
 */

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
}

// Falls DB sich ändert nur noch hier umschreiben für alle Skripte und DB Zugänge
$mysqli = mysqli_connect('127.0.0.1', 'azubis', '6r!BGWG3tq!8db47PQ', 'azubis', 3308);

if ( mysqli_connect_errno() )
{
    return false;
}

mysqli_query($mysqli, "INSERT INTO NFYPraktikum (Name,Email,Message) VALUES ('$name', '$email', '$message')");

?>