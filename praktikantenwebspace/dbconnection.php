<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 03.01.2018
 * Time: 10:14
 */

if(isset($_POST["name"], $_POST["email"], $_POST["message"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $ipaddress = $_SERVER['REMOTE_ADDR'];

    // Falls DB sich ändert nur noch hier umschreiben für alle Skripte und DB Zugänge
    $mysqli = mysqli_connect('127.0.0.1', 'azubis', '6r!BGWG3tq!8db47PQ', 'azubis', 3308);

    if ( !$mysqli )
    {
        echo "Es ist folgender Fehler aufgetreten: " . $mysqli->error;
        die();
    }

    $query = "INSERT INTO NFYPraktikum (Name,Email,Message,IPAddress) VALUES ('".$name."', '".$email."', '".$message."', '".$ipaddress."')";

    mysqli_query($mysqli, $query);
    echo "Herzlichen Glückwunsch! Sie haben sich erfolgreich eingetragen\n\rName: " . $name . "\n\rEmail Adresse: " . $email . "\n\rNachricht: " . $message . "\n\rIP-Adresse: " . $ipaddress . "\n\r";
}
?>