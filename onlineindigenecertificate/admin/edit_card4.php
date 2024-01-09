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
table{width:100%;

color:black;

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
        <li ><a href="requested.php">Applied Indigene Cert</a></li>
        <li ><a href="confirmed.php">Confirmed Cert</a></li>
        <li class="active"><a href="edit_card.php">Edit Cert</a></li>
        <li><a href="complaint.php">Complaint</a></li>
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
    <h1>MODIFYING INDIGENE CERTIFICATE PAGE</h1></center>
            <p style="float:left;">Edit only mistaked field leave correct one dont touch it and click on Update Now</p>
        
        
        
             <p>
                <?php

require_once('db_function.php');



$id= $_SESSION['id'];     


$name = $_POST['name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$center_name = $_POST['center_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dobirth = $_POST['dobirth'];
	  
	  $query = "Update processed set name='$name', father_name='$father_name', mother_name='$mother_name', center_name='$center_name', address='$address', gender='$gender', dobirth='$dobirth' where id='$id'";

if(mysqli_query($con,$query)) {
	echo "<center>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
echo '<div style="background-color:blue; color:white; width:auto; height:auto;">Indigene Certificate Edited Sucessfully </div>';
echo "<br>";
echo "<br>";
echo '<a href="edit_card.php">Edit Another Indigene </a>';
}

mysqli_close($con);
?>
             </p>
             <p>&nbsp;  
               
               
               
               
               
               
               
             </p>
    <p>&nbsp;</p>
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