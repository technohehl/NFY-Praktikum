<?php
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum bei Newsfactory</title>
</head>
<body>
<h1>Praktikum bei Newsfactory</h1>

<h2>Datum</h2>
Das Datum ist: <?php echo date("d F Y"); ?>
<h2>Formular</h2>
<h3>Eingabe</h3>
<form action="" method="post">
    Name: <br><input type="text" name="name"><br>
    Email Adresse: <br><input type="email" name="email"><br>
    Nachricht: <br><textarea name="message"></textarea><br>
    <input type="submit" name="submit" value="Senden"><br>
</form>
<h3>Ausgabe</h3>
<p>Name: <?php echo $name; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Nachricht: <?php echo $message; ?></p>
</body>
</html>
