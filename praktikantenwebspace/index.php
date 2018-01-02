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
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta charset="UTF-8">
    <title>Praktikum bei Newsfactory</title>
</head>
<body>
<div class="content">
    <div class="title">
        <h1><a href="index.php">Praktikum bei Newsfactory</a></h1>
    </div>

    <div class="slider">

    </div>

    <ul class="menu">
        <li><a href="#datum">Datum</a></li>
        <li><a href="#formular">Formular</a></li>
        <li><a href="#about">About</a></li>
    </ul>

    <div>
    <h2 id="datum">Datum</h2>
        <p>Das Datum ist: <?php echo date("d F Y"); ?></p>
    </div>

    <div>
    <h2 id="formular">Formular</h2>
        <h3>Eingabe</h3>
        <div>
            <form action="" method="post">
                Name: <br><input type="text" name="name"><br>
                mail Adresse: <br><input type="email" name="email"><br>
                Nachricht: <br><textarea name="message"></textarea><br>
                <input type="submit" name="submit" value="Senden"><br>
            </form>
        </div>
        <h3>Ausgabe</h3>
            <div>
                <p>Name: <?php echo $name; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Nachricht: <?php echo $message; ?></p>
            </div>
    </div>
</div>
</body>
</html>
