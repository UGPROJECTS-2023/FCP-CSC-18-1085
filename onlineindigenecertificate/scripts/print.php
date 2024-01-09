<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>ONLINE BIRTH REGISTRATION SYSTEM </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
<style>
table{width:600px;

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
		width:700px;
		border: 7px solid black;
		height:700px;
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


</style>

</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
<div id="header">
    <center><div style="color:#FFF;width:1000px;"><font size="5px">ONLINE BIRTH REGISTRATION SYSTEM
    </font></div></center>
    <div id="topnav">
      <ul>
        <li ><a href="home.php">Home</a></li>
        <li  ><a href="request.php">Request Birth Cert</a></li>
        <li><a href="status.php">Status</a></li>
        <li class="active"><a href="print.php">Print Cert</a></li>
        <li ><a href="complaint.php">Complaint</a></li>
        <li><a href="inbox.php">Inbox</a></li>
        <li class="last"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
  <center>
    <h1>You can always print your Birth Certificate that is why we implemented this portal for you</h1>
   
    <?php

include('db_function.php');


$username = $_SESSION['username'];

$result = mysqli_query($con, "Select * from processed where username='$username'");

while($row= mysqli_fetch_array($result)) {
?>    
    <center>
    

    <div id="box2">

    <table border="0" align="center">
	
	<tr>
<th colspan="2"><center><img src="./images/Coat_of_arms_of_Nigeria.png" width="121" height="85" /></center></th>
</tr>

<tr>
<th colspan="3"><center><font color="#006600" size="+2">DUTSE LOCAL GOVERNMENT</center></font></th> 
</tr>
<tr>
<th colspan="3"><center><font color="BLACK"><font size="+1">JIGAWA STATE OF NIGERIA</center></font></font></th>
</tr>
<tr>
<th colspan="3"><center><font color="red"><font size="+1">CERTIFICATE OF BIRTH</center></font></font></th>
</tr>
<tr>
<br><th colspan="3"><center><font color="BLUE"><font size="-2">NUMBER: _______  JGW/DTS/<?php  echo $row['id']; ?>   __________</center></font></font></th>
</tr>

<tr>
<td><font color="black"> <strong>I______________</font> <?php  echo $row['father_name']; ?>______________Register of Birth & Deaths <br /> 

<p><font color="green">at _______</font> <?php  echo $row['center_name']; ?>______ in nigeria do hereby certify that I </p>
<p><font color="green">am the father of ____________</font> <?php  echo $row['name']; ?>______________</p>
<p><font color="green">born of ______</font> <?php  echo $row['father_name']; ?>_______ and_______ <?php  echo $row['mother_name']; ?>_____ </p>
<p><font color="green">at ___________________</font> <?php  echo $row['address']; ?>___________________</p>
<p><font color="green">date of birth is on ___________________</font> <?php  echo $row['dobirth']; ?>___________________</p>
<p><font color="green">issued on ___________________</font> <?php  echo $row['doissues']; ?>___________________</p>
<br><br>
<center><img src="images/sign.jpg" width="150px" /> </p></center>
<center><p><font color="red">REGISTERAR SIGNATURE</font></center>
</td> 
</tr>

	

</table>

<?php
}
mysqli_close($con);
?>
   
  </div>
      

    <p>&nbsp;</p>
    <p>RC162392</p>
    <p>&nbsp;</p>
</center>

<p style="float:right">  <input type="submit" value="Print" onclick="print();" /></p>
<br />
  </div>

    
    


  </center>
  <center>
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  </center>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; FATIMA AMINU MUSA FCP/CSC/18/1085  </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>