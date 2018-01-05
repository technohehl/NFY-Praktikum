<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum bei Newsfactory</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="css/hamburgers.css">
    <link rel="icon" type="image/svg+xml" href="img/libreboot.png" sizes="any">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').bxSlider();
        });

        function sendData() {
            $.ajax({
                type: 'POST',
                url: 'dbconnection.php',
                data:
                {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    message: $('#nachricht').val(),
                    captcha: grecaptcha.getResponse()
                }
            }).done(function (data){
                alert(data);
                $("form").each( function() {
                    this.reset();
                });
            });
        }

        // Hamburger Menu
        function togglemenu() {
            var hamburgermenu = document.getElementById("hamburger-menu");
            if (hamburgermenu.className === "hamburger hamburger--elastic") {
                hamburgermenu.className += "hamburger hamburger--elastic is-active";
            } else {
                hamburgermenu.className = "hamburger hamburger--elastic";
            }
        }
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

    <div class="hamburger-menu">
    <button id="hamburger-menu" class="hamburger hamburger--elastic" type="button" onclick="togglemenu()">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
    </div>

    <div id="section1">
    <h2>Section1</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>

        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer</p>
    </div>

    <div id="datum">
    <h2>Datum</h2>
        <p>Das Datum ist: <?php echo date("d F Y"); ?></p>
    </div>
    <div id="formular">
    <h2>Formular</h2>
        <h3>Eingabe</h3>
        <p>Bei diesem Formular werden Ihre Eingaben in einer Datenbank gespeichert. Auf Wunsch kann Ihre Eingabe auch per Email verschickt werden. Dazu in der dbconnection.php die Zeile mail "scharfschalten"</p>
        <div class="form">
            <form>
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
                <div class="g-recaptcha" data-sitekey="6LetKz8UAAAAAHyVBSGYknAYg3_Benjt4NCAE-jh"></div>
                <div class="zeile">
                    <input type="button" name="submit" onclick="sendData()" value="Senden">
                </div>
            </form>
        </div>
        <h3>PDF Demo</h3>
        <p>Bei diesem Formular werden Sie zu einer Seite weitergeleitet, welches ein pdf enthält</p>
        <div class="form">
            <form action="pdf.php" method="post">
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
                    <input type="submit" name="submit" value="Senden">
                </div>
            </form>
        </div>

    </div>

    <div id="qr code">
        <h2>QR Code</h2>
        <p>Feel free to contact me here: </p>
        <?php
        require_once 'lib/phpqrcode/qrlib.php';
        QRcode::png('support@technohehl.de');
        ?>
    </div>

    <div id="about">
        <h2>About</h2>
        <p>This page was developed with ❤ by <a href="https://technohehl.de">Raphael Hehl</a></p>
    </div>

    <div id="sources">
        <h2>Quellen</h2>
        <ul>
            <li><a href="https://github.com/stevenwanderski/bxslider-4">bxslider</a></li>
            <li><a href="https://jquery.com/">jQuery</a></li>
            <li><a href="https://www.opendesktop.org/p/1025846/">Wallpaper</a></li>
            <li><a href="https://github.com/jonsuh/hamburgers">Hamburgers</a></li>
            <li><a href="http://phpqrcode.sourceforge.net/">phpqrcode</a></li>
        </ul>
    </div>

    <div class="footer">
        <p>Made with ❤ by Raphael Hehl</p>
    </div>
</div>
</body>
</html>
