<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Administrators Section </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
<style>
table{width:750px;

color:black;
border:#FFF;


}
tr {
	border:#FFF;	
}

td {
border:#FFF;
}
th {
	border:#FFF;	
}
#box {
		text-align:left;
		width:600px;
		border: 5px solid green;
		height:380px;
		-webkit-border-radius: 23px;
		padding:5px;
}

#box2 {
		text-align:left;
		width:800px;
		border: 10px solid black;
		height:950px;
		padding:15px;
}
#text {
		line-height:25px;
}

#back_card {
	position:absolute;
	top:232px;
	left:406px;
	width: 278px;
	height: 309px;
	background-image:url(../images/back_card.jpg)
}


#apDiv1 {
	position:absolute;
	left:331px;
	top:913px;
	width:260px;
	height:137px;
	z-index:1001;
}
</style>
</head>
<body id="top">
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper col2"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
  <center>
    <h1>VIEW INDIGENE CERTIFICATE</h1>
    <p>&nbsp;</p>
</center>
            <p style="float:left;">This is what member may see and print</p>
    <p style="float:left;">&nbsp;</p>
            


    <p>&nbsp;</p>
    <p>&nbsp;</p>

<?php

include('db_function.php');

$id = $_GET['id'];


$result = mysqli_query($con, "Select * from processed where id='$id'");

while($row= mysqli_fetch_array($result)) {
?>    
    <center>

    <div id="box2">

    <table width="780" border="0" align="center">
	
    <tr>
<th width="774" colspan="2"><center><img src="./images/Coat_of_arms_of_Nigeria.png" width="121" height="85" /></center></center></th>
</tr>

<tr>
<th colspan="3"><center><font color="#006600" size="+3">DUTSE LOCAL GOVERNMENT COUNCIL</center></font></th> 
</tr>
<tr>
<th colspan="3"><center><font color="BLACK"><font size="+1">JIGAWA STATE OF NIGERIA <br><br></center></font></font></th>
</tr>

<tr>
<br><th colspan="3"><center><font color="BLUE"><font size="-1">
  <p>Reference Number: __  JGW/DUTSE/
    <?php  echo $row['id']; ?>
    __ </p>
  <p>RC162392 <br>
    <br>
    <br>
    <br>
  </p>
</center></font></font></th>
</tr>

<tr>
<th colspan="4"><center><font color="red"><font size="+2">TO WHOM IT MAY CONCERN <br><br></center></font></font></th>
</tr>

<tr>
<td><font color="black"> <strong>I wish to write and introduce the bearer __</font> <?php  echo $row['full_name']; ?>__as an indegine of Dutse L.G.A, <br /> 
<br>
<p><font color="Black">He / She hails from __</font> <?php  echo $row['address']; ?>__of __<?php  echo $row['ward']; ?>__ Ward. </p>
<p><font color="black">Of Dutse Local Government Jigawa State. This Latter will serve for one month.</font></p>
<p><font color="black">In view of the above, please render Him / Her any assistance He / She may require, pending the</p>
<p><font color="black">issuence of indegine certificate.</font> </p>
<p><font color="black">Thanks in anticipating your cooporation as usual.</font> </p>
<br><br>

<p><font color="black">This Certificate will be valid from_______</font> <?php  echo $row['doissues']; ?>______ to _______</font> <?php  echo $row['doissues']; ?>_______</p>
<br><br>
<center></p>
</center>
<P><center color="black">CHAIRMAN</P>
<p><center color="black"> signature</p>
<p><center color="black">----------</p>
<center>
<p><font color="red"> Muhammad Ibrahim</font></center>
<center><p><font color="red">Hon. Chairman</font></center>
<center><p><font color="red">Dutse Local Government</font>
  </center></td> 
</tr>
</table>



<?php
}
mysqli_close($con);
?>
   
  </div>
			 

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</center>

<a href="confirmed.php"> Back&laquo; </a><p style="float:right">  <center><input type="submit" value="Print" onclick="print();" /></center></p>
<br />
  </div>




</div>


<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
</body>
</html>