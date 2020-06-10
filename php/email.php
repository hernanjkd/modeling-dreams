<?php
include('../php/head.php');

echo '<img src="../images/build/topEmail.png" />';

include('../php/buttons.php');



$to = 'hernangleo@hotmail.com';

mail($to, $_REQUEST['subject'], $_REQUEST['message'], $_REQUEST['email']);

include('../php/foot.php');
?>