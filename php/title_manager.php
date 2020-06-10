<html>

<head>
<title>Modeling Dreams - Text Manager</title>
</head>

<?php







if (isset($_REQUEST['title'])) {

include('../../cgi-bin/mysql_connect.php');

$query = "INSERT INTO " . $_REQUEST['page'] . " (date, content)
	VALUES ('" . date('Y-m-d H:i:s') . "','" . $_REQUEST['title']
	. "')";

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



<form action="title_manager.php" method="post" 
      style="position:absolute;top:45%;left:43%">

<?php
echo '<input name="page" value="' . $tablenametosend . '" type="hidden" />'
?>


<input name="title" type="text" />
<br />
<input type="submit" value="Submit" />

</form>



<script language="javascript" type="text/javascript" src="../javascript/cookieWriter.js"></script>
<script language="javascript" type="text/javascript">
<!--
sendTN('false')
//-->
</script>



</body>
</html>