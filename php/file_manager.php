<html>

<head>
<title>File Manager</title>

<link rel="stylesheet" type="text/css" href="../css/style.css" />

<script language="javascript" type="text/javascript" src="../javascript/cookieWriter.js"></script>
</head>

<body>

<center>

<?php






if (isset($_REQUEST['page'])) {

$old_path = '/mnt/w0101/d35/s41/b0283773/www/images/empty/'
		. $_REQUEST['img'];
$new_path = '/mnt/w0101/d35/s41/b0283773/www/images/upload/'
		. $_REQUEST['img'];

rename($old_path, $new_path);


include('../../cgi-bin/mysql_connect.php');


$query = "INSERT INTO " . $_REQUEST['page'] 
	. " (date, img, width, description) VALUES ('" 
	. date('Y-m-d H:i:s') . "','" . $_REQUEST['img'] . "','" 
	. $_REQUEST['width'] . "','" . $_REQUEST['description'] . "')";

@mysql_query($query);


mysql_close();


echo '
<script language="javascript" type="text/javascript">
<!--
document.location.href = \'../' . $_REQUEST['page'] . '.php\'
//-->
</script>
';

}






$tablenametosend = $_COOKIE['sttntkwmttu'];



list($file_type , $ext) = split('/' , $_FILES['file']['type']);

$img_name = date('ymdHis') . '.' . $ext;

$target_path = '/mnt/w0101/d35/s41/b0283773/www/images/empty/'. $img_name;


if ($file_type == 'image') {

    move_uploaded_file($_FILES['file']['tmp_name'], $target_path);

    echo '<img class="upload" src="../images/empty/' . $img_name 
		. '" /><br />';


    list($width, $height) = getimagesize('../images/empty/' . $img_name);

    echo 'ancho: ' . $width . 'px <br /> alto: ' . $height . 'px<br />'
	. 'size: ' . round($_FILES['file']['size'] / 1024) . ' KB<br />';

echo ' <br />
<form action="file_manager.php" method="post">
<input name="page" type="hidden" value="' . $tablenametosend . '" />
<input name="img" type="hidden" value="' . $img_name . '" />
<input name="width" type="hidden" value="' . $width . '" />
<textarea name="description" rows="5" cols="20"></textarea>
<br />
<input type="button" value="Borrar" onclick="unlinki(\'' . $img_name 
		. '\',\'' . $tablenametosend . '\')"
 		style="position:relative;left:-54px" />
<input type="submit" value="Guardar" style="position:relative;left:54px" />
</form>
';

}
else
    echo 'El archivo que esta intentando subir no es una imagen.';


?>

</center>

<script language="javascript" type="text/javascript" src="../javascript/cookieWriter.js"></script>
<script language="javascript" type="text/javascript">
<!--
sendTN('false')
//-->
</script>

</body>
</html>