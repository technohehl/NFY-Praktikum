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
    <link rel="icon" type="image/svg+xml" href="img/libreboot.png" sizes="any">
    <meta charset="UTF-8">
    <title>Praktikum bei Newsfactory</title>
</head>
<body>
<div class="content">
    <div class="title">
        <h1><a href="index.php">Praktikum bei Newsfactory</a></h1>
    </div>

    <ul class="menu">
        <li><a href="#datum">Datum</a></li>
        <li><a href="#formular">Formular</a></li>
        <li><a href="#about">About</a></li>
    </ul>

    <div id="datum">
    <h2>Datum</h2>
        <p>Das Datum ist: <?php echo date("d F Y"); ?></p>
    </div>

    <div id="formular">
    <h2>Formular</h2>
        <h3>Eingabe</h3>
        <div class="form">
            <form action="" method="post">
                <div class="row">
                    <div class="form-label">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-field">
                        <input type="text" id="name" placeholder="Ihr Name...">
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label for="Email">Name</label>
                    </div>
                    <div class="form-field">
                        <input type="text" id="email" placeholder="Ihre Email Adresse...">
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label for="nachricht">Nachricht</label>
                    </div>
                    <div class="form-field">
                        <textarea id="nachricht" name="nachricht" placeholder="Ihre Nachricht..." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

        <h3>Ausgabe</h3>
            <div>
                <p>Name: <?php echo $name; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Nachricht: <?php echo $message; ?></p>
            </div>
    </div>
    <div id="quellen">
        <ul>
            <li>XZY</li>
            <li>ABC</li>
        </ul>
    </div>
</div>
</body>
</html>
