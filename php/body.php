<?php


if ($_COOKIE['ctdrfmysql']) {

    list($cdate, $cimg) = split('@' , $_COOKIE['ctdrfmysql']);

    $query = 'DELETE FROM ' . PAGE_NAME . ' WHERE date = \'' 
		. $cdate . '\'';

    @mysql_query($query);



    if ($cimg != '') unlink('images/upload/' . $cimg);




    echo '<script language="javascript" type="text/javascript">
	  deletesql(\'false\',\'true\')</script>';
}


$cookie = false;

if ($_COOKIE['riverpeme'] == 'true') {

    $cookie = true;

    //unlink the image that was deleted from file_manager.php
    if ($_COOKIE['unlinktiting']) {
	unlink('/mnt/w0101/d35/s41/b0283773/www/images/empty/' 
		. $_COOKIE['unlinktiting']);

  	echo '<script language="javascript" type="text/javascript">
	      writec(\'unlinktiting\',\'false\',\'true\')</script>';
    }
}








$query = 'SELECT * FROM ' . PAGE_NAME . ' ORDER BY date';

$result = @mysql_query($query);



$previous = 'p';
$total_width = 0;

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

    if ($row['img'] || $row['description']) {

	// open a new table for the images
	if ($previous == 'p') 
	    echo '<table class="img"><tr>';


	$total_width = $total_width + $row['width'] + 20;

	if ($total_width > 800) {
	    echo '</tr></table><table class="img"><tr>';
	    $total_width = $row['width'];
	}


	echo '<td><img src="images/upload/' . $row['img'] . '" />
		<br />' . $row['description'];


	if ($cookie)
	    echo '<input type="button" value="Borrar" id="'
		. $row['date'] . '@' . $row['img'] 
		. '" onclick="deletesql(this.id)" /></td>';

	$previous = 'img';
    }

    if ($row['style']) {

	// close the table where the images are
	if ($previous == 'img') {
	    echo '</tr></table>';
	    $total_width = 0;
	}

	echo '<p class="' . $row['style'] . '">' . $row['content'];

	if ($cookie) 
	    echo '<input id="' . $row['date'] . '@" type="button"
		value="Borrar" onclick="deletesql(this.id)" />';

	echo '</p>';

	$previous = 'p';
    }

    else if ($row['content']) {

	// close the table where the imgages are
	if ($previous == 'img') {
	    echo '</tr></table>';
	    $total_width = 0;
	}

	echo '<div class="text-title">
		<h1><i><u>' . $row['content'] 
		. '</u></i></h1>';

	if ($cookie)
	    echo '<input id="' . $row['date'] . '@" type="button"
		value="Borrar" onclick="deletesql(this.id)" />';

	echo '</div>';

	$previous = 'p';
    }
}

// close the table where the images are
if ($previous == 'img')
    echo '</tr></table>';



if ($cookie) {

    $table = '

<hr /> 

<table>
  <tr valign="top">

  <td style="border-right:solid black 1px">
  <font face="verdana" size="1">
	&nbsp;&nbsp;<b>IMAGENES</b>
  </font><br />
	<form action="php/file_manager.php" method="post"
	      enctype="multipart/form-data">
  	<input name="file" type="file" /><br />
	<input name="' . PAGE_NAME
	. '" type="submit" value="Submit" onclick="sendTN(this.name)" />
	</form>
  </td>

  <td style="border-right: solid black 1px;
	     padding: 10px;
	     padding-top: 1px;">
  <font face="verdana" size="1">
	&nbsp;&nbsp;<b>TEXTO</b>
  </font><br />
  <a href="php/text_manager.php">
	<input name="' . PAGE_NAME . '" type="button"
	       value="Ingresar Texto" onclick="sendTN(this.name)" />
  </a>
  </td>

  <td>
  <font face="verdana" size="1">
	&nbsp;&nbsp;<b>TITULO</b>
  </font><br />
  <a href="php/title_manager.php">
	<input name="'. PAGE_NAME . '" type="button"
		value="Ingresar Titulo" onclick="sendTN(this.name)" />
  </a>
  </td>

  <td width="100%"></td>
  </tr>
</table>


<hr /> ';

    echo $table;
}

?>