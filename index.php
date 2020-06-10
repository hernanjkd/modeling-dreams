<?php
include('php/head.php');
?>

<div id="maindiv" class="main">

<img src="images/build/top.jpg" />

<table class="main"> <!--only 3 col: buttons, space, main title-->
<tr><td width="180px">

<table class="buttons">
  <tr><td></td></tr> <!--space on top of the buttons-->
  <tr><td onmouseover="showSub('psub','show')"
	  onmouseout="showSub('psub','hide')">
<a href="paste.php">
    <img src="images/build/pasteButton.gif" />
    <img class="sub" id="psub" src="images/build/pasteButtonSub.gif" />
</a>
  </td></tr>
  <tr><td onmouseover="showSub('msub','show')"
	  onmouseout="showSub('msub','hide')">
<a href="molds.php">
    <img src="images/build/moldsButton.gif" />
    <img class="sub" id="msub" src="images/build/moldsButtonSub.gif" />
</a>
  </td></tr>
  <tr><td onmouseover="showSub('pfsub','show')"
	  onmouseout="showSub('pfsub','hide')">
<a href="party.php">
    <img src="images/build/partyFavorsButton.gif" />
 <img class="sub" id="pfsub" src="images/build/partyFavorsButtonSub.gif" />
</a>
  </td></tr>
  <tr><td onmouseover="showSub('csub','show')"
	  onmouseout="showSub('csub','hide')">
<a href="classes.php">
    <img src="images/build/classesButton.gif" />
    <img class="sub" id="csub" src="images/build/classesButtonSub.gif" />
</a>
  </td></tr>
  <tr><td onmouseover="showSub('tsub','show')"
	  onmouseout="showSub('tsub','hide')">
<a href="tools.php">
    <img src="images/build/toolsButton.gif" />
    <img class="sub" id="tsub" src="images/build/toolsButtonSub.gif" />
</a>
  </td></tr>
  <tr><td onmouseover="showSub('nsub','show')"
	  onmouseout="showSub('nsub','hide')">
<a href="news.php">
    <img src="images/build/newsButton.gif" />
    <img class="sub" id="nsub" src="images/build/newsButtonSub.gif" />
</a>
  </td></tr>
  <tr><td onmouseover="showSub('cusub','show')"
	  onmouseout="showSub('cusub','hide')">
<a href="contactus.php">
    <img src="images/build/contactUsButton.gif" />
   <img class="sub" id="cusub" src="images/build/contactUsButtonSub.gif" />
</a>
  </td></tr>

  <tr style="height:50px"></tr>

  <tr><td id="leticia">
    <a class="leticia" href="http://www.suarezdelcerro.com.ar/">
      <img src="images/build/leticia.jpg"
       	   onmouseover="showSub('let','show')"
       	   onmouseout="showSub('let','hide')" />
      <img class="sub" id="let"
      	   src="images/build/leticiaSub.jpg" 
       	   onmouseover="showSub('let','show')"
       	   onmouseout="showSub('let','hide')" />
    </a>
  </td></tr>

  <tr style="height:30px"></tr>

</table class="buttons">

</td>
<td width="70px">  <!--space-->
</td>
<td class="title" width="360px">

<img src="images/build/title.jpg"
     onmouseover="showSub('mds','show')"
     onmouseout="showSub('mds','hide')" />
<img class="sub" id="mds" src="images/build/titleSub.jpg"
     onmouseover="showSub('mds','show')"
     onmouseout="showSub('mds','hide')" />

<img id="centerPic" src="images/build/mpic.jpg" />

</td></tr>
</table class="main">

<!--this div is to represent the home button, for javascript purposes-->
<div id="hsub"></div>

<?php
include('php/foot.php');
?>