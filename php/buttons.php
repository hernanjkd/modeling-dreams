<table class="hButtons"><tr>

<td width="89px">
  <a href="index.php" id="home">
  </a>
</td>

<td width="89px">
  <a href="paste.php" id="paste">
  </a>
</td>

<td width="90px">
  <a href="molds.php" id="molds">
  </a>
</td>

<td width="167px">
  <a href="party.php" id="partyFavors">
  </a>
</td>

<td width="100px">
  <a href="classes.php" id="classes">
  </a>
</td>

<td width="88px">
  <a href="tools.php" id="tools">
  </a>
</td>

<td width="84px">
  <a href="news.php" id="news">
  </a>
</td>

<td width="145px">
  <a href="contactus.php" id="contactUs">
  </a>
</td>

</tr></table>


<script type="text/javascript">

/*
 *  Load the buttons in 1 seconds, after the table has been loaded, to prevent the images from
 *  loading anywhere
 */
var lst = ['home','paste','molds','partyFavors','classes','tools','news','contactUs']
var lst2 = ['h','p','m','pf','c','t','n','cu']
setTimeout("loadImages()", 1000)

function loadImages() {
    for (var x=0 ; x < 9 ; x++) {
	var t = '<img src="images/build/'+ lst[x] +'Button.gif"' +
	' onmouseover="showSub(\''+ lst2[x] +'sub\',\'show\')" style="top:129px"' +
	' onmouseout="showSub(\''+ lst2[x] +'sub\',\'hide\')" />' +
    	'<img class="sub" id="'+ lst2[x] +'sub" src="images/build/'+ lst[x] +'ButtonSub.gif"' +
	' onmouseover="showSub(\''+ lst2[x] +'sub\',\'show\')" style="top:129px"' +
	' onmouseout="showSub(\''+ lst2[x] +'sub\',\'hide\')" />'

	document.getElementById(lst[x]).innerHTML = t
    }
}

</script>


<!------------------------------END BUTTONS------------------------------->