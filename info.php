<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 05.01.2018
 * Time: 10:38
 */
echo "<img>";
include('lib/phpqrcode/qrlib.php');

QRcode::png('support@technohehl.de');

echo "</img>";

?>