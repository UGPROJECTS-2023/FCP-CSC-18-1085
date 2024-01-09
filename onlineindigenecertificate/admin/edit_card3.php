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
            
             <table border="1">
      <?php

require_once('db_function.php');

$id = $_GET['id'];

$_SESSION['id'] = $id;

$query=mysqli_query($con, "select * from processed where id='$id'");

while($row=mysqli_fetch_array($query)) {

if(empty($_GET['id'])) {

}

$id=$_GET['id'];

if(!$id) {
echo "no id found";
}



?>

<table border="1" cellpadding="5">
<form action="edit_card4.php"method="post">

<tr>
        <center><th colspan="2"> Applicant Informatione</th></center>
        </tr>
  <tr>
          <td><strong>Full Name.</strong></td>
  <td><input type="text" value="<?php echo $row['full_name'];?>"name="full_name" /></td>
        </tr>
        <tr>
          <td><strong>Gender</strong></td>
  <td><input type="text" value="<?php echo $row['gender'];?>"name="gender" /></td>
        </tr>
        <tr>
          <td><strong>Religion.</strong></td>
          <td><input type="text" value="<?php echo $row['religion'];?>"name="religion" /></td>
        </tr>
        <tr>
          <td><strong>Date Of Birth.</strong></td>
          <td><input type="text" value="<?php echo $row['date_of_birth'];?>"name="date_of_birth" /></td>
        </tr>
        
        <tr>
          <td><strong>Place of Birth.</strong></td>
  <td><input type="text" value="<?php echo $row['place_of_birth'];?>"name="place_of_birth" /></td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><input type="text" value="<?php echo $row['address'];?>"name="address" /></td>
        </tr>
        <tr>
          <td><strong>Occupation.</strong></td>
          <td><input type="text" value="<?php echo $row['occ'];?>"name="occ" /></td>
        </tr>
        <tr>
          <td><strong>Phone No.</strong></td>
          <td><input type="text" value="<?php echo $row['phone'];?>"name="phone" /></td>
        </tr>
        <tr>
        <td><strong>Photo: </strong> </td>
        <td><input type="file" name="photo"> </td>
        </tr>
        <tr>
        <th colspan="2"> Father Informatione</th>
        </tr>
        <tr>
          <td><strong>Father Name.</strong></td>
          <td><input type="text" value="<?php echo $row['father_name'];?>"name="father_name" /></td>
        </tr>
        <tr>
          <td><strong>Place of Birth.</strong></td>
          <td><input type="text" value="<?php echo $row['fpob'];?>"name="fpob" /></td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><input type="text" value="<?php echo $row['faddress'];?>"name="faddress" /></td>
        </tr>
        <tr>
          <td><strong>Occopation.</strong></td>
          <td><input type="text" value="<?php echo $row['focc'];?>"name="focc" /></td>
        </tr>
        <tr>
          <td><strong>Phone No.</strong></td>
        <td><input type="text" value="<?php echo $row['fphone'];?>"name="fphone" /></td>
        </tr>
        <tr>
        <th colspan="2"> Mother Informatione</th>
        </tr>
        <td><strong>Mother Name.</strong></td>
        <td><input type="text" value="<?php echo $row['mother_name'];?>"name="mother_name" /></td>
        </tr>
        <tr>
          <td><strong>Place of Birth.</strong></td>
         <td><input type="text" value="<?php echo $row['mpob'];?>"name="mpob" /></td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><input type="text" value="<?php echo $row['maddress'];?>"name="maddress" /></td>
        </tr>
        <tr>
          <td><strong>Occopation.</strong></td>
        <td><input type="text" value="<?php echo $row['focc'];?>"name="focc" /></td>
        </tr>
        <tr>
          <td><strong>Phone no.</strong></td>
          <td><input type="text" value="<?php echo $row['mphone'];?>"name="mphone" /></td>
        </tr>
        <tr>
        <th colspan="2"> Other Informatione</th>
        </tr>
         <tr>
          <td><strong>Village Name.</strong></td>
          <td><input type="text" value="<?php echo $row['village_name'];?>"name="village_name" /></td>
        </tr>
        <tr>
          <td><strong>Ward Name.</strong></td>
          <td><input type="text" value="<?php echo $row['ward'];?>"name="ward" /></td>
        </tr>
        <tr>
          <td><strong>Distric Head Name.</strong></td>
          <td><input type="text" value="<?php echo $row['district_head'];?>"name="district_head" /></td>
        </tr>
        <tr>
          <td><strong>Dagaci.</strong></td>
          <td><input type="text" value="<?php echo $row['dagaci'];?>"name="dagaci" /></td>
        </tr>
        <tr>
          <td><strong>Mai Unguwa</strong></td>
          <td><input type="text" value="<?php echo $row['mai_unguwa'];?>"name="mai_unguwa" /></td>
        </tr>




<tr>



<td colspan="2"><center><input type="submit" value="Update Now" name="update"/></td>

</table>


<?php
}


mysqli_close($con);
?>
</table>
</center>
      
            
	
            


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
  <p class="fl_left">Copyright &copy; FATIMA MAINU MUSA FCP/CSC/18/1085  </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>