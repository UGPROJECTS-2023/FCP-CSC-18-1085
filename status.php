<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>ONLINE INDIGENE PROCESSING SYSTEM </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
<style>
table{background:green;width:100%;

color:#FFF;

}

</style>

</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
<div id="header">
    <center><div style="color:#FFF;width:1000px;"><font size="5px">ONLINE INDIGENE PROCESSING SYSTEM
    </font></div></center>
    <div id="topnav">
      <ul>
        <li ><a href="home.php">Home</a></li>
        <li  ><a href="request.php">Apply Now</a></li>
        <li class="active"><a href="status.php">Status</a></li>
        <li><a href="print.php">Print Indigene</a></li>
        <li><a href="complaint.php">Complaint</a></li>
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
    <h1>YOUR REQUEST STATUS</h1>
    
    <?php 
	
	require_once('db_function.php');
	
	$username = $_SESSION['username'];
	
$result = mysqli_query($con, "Select * from status where username='$username'");
	
	while($row= mysqli_fetch_array($result)) {
	?>
<table width="100%" height="148" border="1">
<tr>
<td width="40%"><strong>Status: </strong></td>
<td> <?php echo $row['status']; ?></td>
</tr>
</table>
<?php
	}
	mysqli_close($con);
?>
  </center>
  <center>
  <p>&nbsp;</p>
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </center>
  </div>
</div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
  <p class="fl_left">Copyright &copy; FATIMA AMINU MUSA </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>