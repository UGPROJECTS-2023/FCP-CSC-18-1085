<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>ONLINE INDEGINE PROCESSING SYSTEM </title>
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


</style>

</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
<div id="header">
    <center><div style="color:#FFF;width:1000px;"><font size="5px">ONLINE INDEGINE PROCESSING SYSTEM
    </font></div></center>
    <div id="topnav">
      <ul>
        <li ><a href="home.php">Home</a></li>
        <li  ><a href="request.php">Apply Now</a></li>
        <li><a href="status.php">Status</a></li>
        <li class="active"><a href="print.php">Print Indegine</a></li>
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
    <h1>You can always print your Indegine Certificate that is why we implemented this portal for you</h1>
   
    <?php

include('db_function.php');


$username = $_SESSION['username'];

$result = mysqli_query($con, "Select * from processed where user_name='$username'");

while($row= mysqli_fetch_array($result)) {
?>    
    <center>
    

    <div id="box2">

    <table border="0" align="center">
	
	<tr>
<th colspan="2"><center><img src="./images/Coat_of_arms_of_Nigeria.png" width="121" height="85" /></center></center></th>
</tr>

<tr>
<th colspan="3"><center><font color="#006600" size="+3">DUTSE LOCAL GOVERNMENT COUNCIL</center></font></th> 
</tr>
<tr>
<th colspan="3"><center><font color="BLACK"><font size="+1">JIGAWA STATE OF NIGERIA <br><br></center></font></font></th>
</tr>

<tr>
<br><th colspan="3"><center><font color="BLUE"><font size="-1">Reference Number: __  JGW/DUTSE/<?php  echo $row['id']; ?>  __ <br><br><br><br></center></font></font></th>

</tr>

<tr>
<th colspan="4"><center><font color="red"><font size="+2">TO WHOM IT MAY CONCERN <br><br></center></font></font></th>
</tr>

<tr>
<td><font color="black"> <strong>I wish to write and introduce the bearer __</font> <?php  echo $row['full_name']; ?>__as an indegine of Dutse L.G.A, <br /> 
<br>
<p><font color="Black">He / She hails from __</font> <?php  echo $row['address']; ?>__of __<?php  echo $row['ward']; ?>__ Ward. </p>
<p><font color="black">Dutse Local Government of Jigawa State.</font></p>
<p><font color="black">In view of the above, please render Him/Her any assistance He/She may require, pending the</p>
<p><font color="black">issuence of indegine certificate.</font> </p>
<p><font color="black">Thanks in anticipating your cooporation as usual.</font> </p>
<br><br>

<p><font color="black">This Certificate will be valid from_________</font> to _________</font></p>
<br><br><br><br><br><br><br>

<left><p><font color="red"></font></left>
<left><p><font color="red">Executive Secretary<br></font></left>
<left><p><font color="red">Guidance and Counselling Board</font></left>
<left><p><font color="red">Signature___________</font></left>
<left><p><font color="red">Dutse Local Government</font></left>
<br><br><br>
<right><center><p><font color="red">___________</font></center></right>
<right><center><p><font color="red">  Official Stamp and Date</font></center></right>
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

<p style="float:right"><center>  <input type="submit" value="Print" onclick="print();" /></center></p>
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