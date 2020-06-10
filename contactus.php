<?php
include('php/head.php');



/*
 *  THIS IS THE ONLY THING TO CHANGE IN EACH PAGE
 */

echo '<img src="images/build/topEmail.jpg" />';

include('php/buttons.php');


$message = $_REQUEST['message'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$to = 'info@modelingdreams.net';

$mailed = false;

if ($message && $email && subject) {
    $header = 	'From: ' . $email;
    mail($to, $subject, $message, $header);
    $mailed = true;
}

else if ($message || $subject && !$email) {
    echo '<div width="920px" style="text-align:center">
	  	<font color="red">Enter your email</font></div>';
}


if (!$mailed) {
    echo 
'
<form action="contactus.php" method="post" style="padding-bottom:20px">

<table width="920px" style="text-align:center">
<tr>

<td style="text-align:right">Email:</td>
<td style="text-align:left;width:540px">
<input name="email" type="text" size="30" value="' . $email . '" /></td>

</tr><tr>

<td style="text-align:right">Subject:</td>
<td style="text-align:left;width:540px">
<input name="subject" type="text" size="30" value="' . $subject 
	. '" /></td>

</tr>
</table>

<div width="940px" style="text-align:center">
<textarea name="message" cols="65" rows="23">' . $message
. '</textarea>
</div>

<br />
<input type="submit" value="Send" style="position:relative;left:670px" />

</form>
';
}
else
    echo '<div width="920px" style="text-align:center">
	<h2>Your email has been sent!</h2></div>';


include('php/foot.php');
?>