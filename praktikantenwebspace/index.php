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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slider').bxSlider();
        });
    </script>

</head>
<body>
<div class="content">
    <div class="title">
        <h1><a href="index.php">Praktikum bei Newsfactory</a></h1>
    </div>

    <div class="slider">
        <div><img class="single-slide" src="img/slider/trees.jpg"></div>
        <div><img class="single-slide" src="img/slider/street-green.jpg"></div>
        <div><img class="single-slide" src="img/slider/parabola.jpg"></div>
        <div><img class="single-slide" src="img/slider/waterfall.jpg"></div>
    </div>

    <ul class="menu">
        <li class="menu-item"><a href="#datum">Datum</a></li>
        <li class="menu-item"><a href="#formular">Formular</a></li>
        <li class="menu-item"><a href="#about">About</a></li>
        <li class="menu-item"><a href="#sources">Quellen</a></li>
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
                <div class="zeile">
                    <div class="form-label">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-field">
                        <input type="text" id="name" name="name" placeholder="Ihr Name..." required>
                    </div>
                </div>
                <div class="zeile">
                    <div class="form-label">
                        <label for="Email">Name</label>
                    </div>
                    <div class="form-field">
                        <input type="email" id="email" name="email"  placeholder="Ihre Email Adresse..." required>
                    </div>
                </div>
                <div class="zeile">
                    <div class="form-label">
                        <label for="nachricht">Nachricht</label>
                    </div>
                    <div class="form-field">
                        <textarea id="nachricht" name="message" placeholder="Ihre Nachricht..." style="height:200px" required></textarea>
                    </div>
                </div>
                <div class="zeile">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>

        <?php
        if(isset($_POST["submit"])){ ?>
            <h3>Ausgabe</h3>
            <div>
                <p>Name: <?php echo $name; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Nachricht: <?php echo $message; ?></p>
            </div>
        <?php }
        ?>
    </div>

    <div id="about">
        <h2>About</h2>
        <p>This page was developed with ❤</p>
    </div>

    <div id="sources">
        <h2>Quellen</h2>
        <ul>
            <li><a href="https://github.com/stevenwanderski/bxslider-4">bxslider</a></li>
        </ul>
    </div>
</div>
</body>
</html>
