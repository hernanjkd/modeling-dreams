<html>

<head>
<title>Modeling Dreams - Text Manager</title>
</head>

<?php









if (isset($_REQUEST['text'])) {

include('../../cgi-bin/mysql_connect.php');

$query = "INSERT INTO " . $_REQUEST['page'] . " (date, style, content) 
	VALUES ('" . date('Y-m-d H:i:s') . "','"
	. $_REQUEST['color'] . "','" . $_REQUEST['text'] . "')";

@mysql_query($query);

mysql_close();

echo '<script language="javascript" type="text/javascript">
<!--
document.location.href = \'../' . $_REQUEST['page'] . '.php\'
//-->
</script>';

}









$tablenametosend = $_COOKIE['sttntkwmttu'];

?>

<body>



<form action="text_manager.php" method="post" 
      style="position:absolute;top:25%;left:30%">

<?php
echo '<input name="page" value="' . $tablenametosend . '" type="hidden" />'
?>

<table style="position:relative;left:10px"><tr>
<td width="70px">
Azul<input name="color" type="radio" value="blue" checked="true" />
</td>
<td>
Rosa<input name="color" type="radio" value="pink" />
</td>
</tr></table>

<textarea name="text" rows="20" cols="60"></textarea>
<br />
<input type="submit" value="Submit" style="position:relative;left:387px" />

</form>



<script language="javascript" type="text/javascript" src="../javascript/cookieWriter.js"></script>
<script language="javascript" type="text/javascript">
<!--
sendTN('false')
//-->
</script>



</body>
</html>