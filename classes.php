<?php
include('php/head.php');




/*
 *  THIS IS THE ONLY THING TO CHANGE IN EACH PAGE
 */
DEFINE('PAGE_NAME', 'classes');

echo '<img src="images/build/topClasses.jpg" />';




include('php/buttons.php');
include('../cgi-bin/mysql_connect.php');
include('php/body.php');
include('php/foot.php');

mysql_close();

?>