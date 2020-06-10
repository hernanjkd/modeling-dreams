<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>

<title>Modeling Dreams</title>

<link type="text/css" rel="stylesheet" href="css/style.css" />

<script language="javascript" type="text/javascript" src="javascript/tools.js"></script>
<script language="javascript" type="text/javascript" src="javascript/cookieWriter.js"></script>

</head>

<body

<?php
if ($_COOKIE['riverpeme'] == 'true') {
    echo ' background="images/build/riverplate.jpg">';

    $logout = '<div style="position:absolute;cursor:pointer"
  		    onclick="log(\'out\')">log out</div>';
    echo $logout;
}
else
    echo '>';
?>

<div id="maindiv" class="main">