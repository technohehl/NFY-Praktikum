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
    //$secret = "6LetKz8UAAAAAMCbMiq-3nLhWv3rzPQv8aqEgWGq";
    //$response = $_POST["captcha"];

   /* $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['captcha']);
    $captcha_success = json_decode($verify);

    if (isset($respone)) {
        echo "success";
    } else {
        echo "failed\n\rresponse = " . $response . "\n\rverify = " . $verify . "\n\rcaptcha_success = " . $captcha_success;
    }*/

    // Falls DB sich ändert nur noch hier umschreiben für alle Skripte und DB Zugänge
    $mysqli = mysqli_connect('127.0.0.1', 'azubis', '6r!BGWG3tq!8db47PQ', 'azubis', 3308);

    if ( !$mysqli )
    {
        echo "Es ist folgender Fehler aufgetreten: " . $mysqli->error;
        die();
    }

    $query = "INSERT INTO NFYPraktikum (Name,Email,Message,IPAddress) VALUES ('".$name."', '".$email."', '".$message."', '".$ipaddress."')";

    mysqli_query($mysqli, $query);
    mysqli_close($mysqli);

    // Email
    $empfaenger = "support@technohehl.de";
    $betreff = "Form Submission";
    $nachricht = "Name: " . $name . "\n\rEmail Adresse: " . $email . "\n\rNachricht: " . $message . "\n\rIP-Adresse: " . $ipaddress . "\n\r";

    //mail($empfaenger, $betreff, $nachricht);

    echo "Herzlichen Glückwunsch! Sie haben sich erfolgreich eingetragen\n\rName: " . $name . "\n\rEmail Adresse: " . $email . "\n\rNachricht: " . $message . "\n\rIP-Adresse: " . $ipaddress . "\n\r";

} else {
    echo "ACHTUNG! Bitte füllen Sie alle Felder und das Captcha aus!";
}
?>