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

table {
	width:620px;
	border: 3px solid green;
	
}
td {
	border:#FFFFFF;
}
tr {
	border:#FFFFFF;
}
th {
	border:#FFFFFF;
}
input {
		background:#CCCCCC;
		color:#000;
}
#button1 {
	background:#006600;
	}
#box {
	background:green;
	border: 2px solid black;
	height:auto;	
	color:white;
}

#submited {
	width:100%;
	background-color:black;
	color:white;
	height:auto;
	float:left;
	text-align:center;
	size:20px;
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
        <li><a href="print.php">Print Indegine</a></li>
        <li class="active"><a href="complaint.php">Complaint</a></li>
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
    <h1>If you want to change your details use this form to contact our administrators</h1>
    
    <?php
include('db_function.php');

if(isset($_POST['complaints'])) {

	$username = $_SESSION['username'];
	$date = date('d/m/y');
	$subject = $_POST['subject'];
	$complaint = $_POST['complaint'];
	
	$query = "INSERT INTO complaint(username,date,subject,complaint)values('$username','$date','$subject','$complaint')";
	
	if(mysqli_query($con, $query)) {
			
			
			echo '<div id="submited">Your Complaint was Sent Successfully </div>';
				
	}
	else {
		echo "Error";
	}
}
?>
<center>
<div id="box">

<h1>Complaint Form</h1>
<form action="complaint.php" method="post">
<p><strong>Subject</strong></p>

<p><input type="text" name="subject" /></p>
<br />
<p><strong>Your Complaint</strong></p>
<p> <textarea name="complaint" cols="40" rows="4"> </textarea></p>
<br />
<p><input type="submit" name="complaints" value="Submit"/></p>
</form>

</div>



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
  <p class="fl_left">Copyright &copy; FATIMA AMINU MUSA FCP/CSC/18/1085 </p>
    <p class="fl_right">Supervised by MISS FATIMA AMINU MUSA </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>