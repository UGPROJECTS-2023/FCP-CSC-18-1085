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
        <li class="active"><a href="requested.php">Requested Indigene Cert</a></li>
        <li><a href="confirmed.php">Confirmed Cert</a></li>
        <li><a href="edit_card.php">Edit Cert</a></li>
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
    <h1>REQUESTED INDIGENE CERTIFICATE</h1></center>
            <p style="float:left;">Click on confirm cert to processed the cert or to reject the indigene Cert</p>
            
            	
<?php
	
	require_once('db_function.php');

$id = $_GET['id'];	
	
	$_SESSION['id'] = $id;
	
	$id = $_GET['id'];
	
	$result = mysqli_query($con, "select * from request where id='$id'");

while($row= mysqli_fetch_array($result)) {
	?>
	
	
	<center>
	<table border="3" cellpadding="5">
	<form action="get_id2.php" method="post">
	<tr>
		</tr>
	<td colspan="2"><center><u><font color="#FF0000">Applicant Personal Information</u></font></td>
	</tr>

<tr>
        <th colspan="2"> Applicant Informatione</th>
        </tr>
  <tr>
          <td><strong>Full Name.</strong></td>
					<td><?php echo $row['full_name']; $_SESSION['full_name'] = $row['full_name'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Gender</strong></td>
          <td><?php echo $row['gender']; $_SESSION['gender'] = $row['gender'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Religion.</strong></td>
					<td><?php echo $row['religion']; $_SESSION['religion'] = $row['religion'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Date Of Birth.</strong></td>
          <td><?php echo $row['date_of_birth']; $_SESSION['date_of_birth'] = $row['date_of_birth'];  ?> </td>
        </tr>
        
        <tr>
          <td><strong>Place of Birth.</strong></td>
          <td><?php echo $row['place_of_birth']; $_SESSION['place_of_birth'] = $row['place_of_birth'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><?php echo $row['address']; $_SESSION['address'] = $row['address'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Occupation.</strong></td>
          <td><?php echo $row['occ']; $_SESSION['occ'] = $row['occ'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Phone No.</strong></td>
          <td><?php echo $row['phone']; $_SESSION['phone'] = $row['phone'];  ?> </td>
        </tr>
        <tr>
        <td><strong>Picture: </strong> </td>
			 <img src="./admin/<?php echo $row['photo']; ?>" width="70" height="70"></a>
        </tr>
        <tr>
        <th colspan="2"> Father Informatione</th>
        </tr>
        <tr>
          <td><strong>Father Name.</strong></td>
          <td><?php echo $row['father_name']; $_SESSION['father_name'] = $row['father_name'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Place of Birth.</strong></td>
          <td><?php echo $row['fpob']; $_SESSION['fpob'] = $row['fpob'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><?php echo $row['faddress']; $_SESSION['faddress'] = $row['faddress'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Occopation.</strong></td>
          <td><?php echo $row['focc']; $_SESSION['focc'] = $row['focc'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Phone No.</strong></td>
          <td><?php echo $row['fphone']; $_SESSION['fphone'] = $row['fphone'];  ?> </td>
        </tr>
        <tr>
        <th colspan="2"> Mother Informatione</th>
        </tr>
        <td><strong>Mother Name.</strong></td>
        <td><?php echo $row['mother_name']; $_SESSION['mother_name'] = $row['mother_name'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Place of Birth.</strong></td>
          <td><?php echo $row['mpob']; $_SESSION['mpob'] = $row['mpob'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><?php echo $row['maddress']; $_SESSION['maddress'] = $row['maddress'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Occopation.</strong></td>
          <td><?php echo $row['mocc']; $_SESSION['mocc'] = $row['mocc'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Phone no.</strong></td>
          <td><?php echo $row['mphone']; $_SESSION['mphone'] = $row['mphone'];  ?> </td>
        </tr>
        <tr>
        <th colspan="2"> Other Informatione</th>
        </tr>
         <tr>
          <td><strong>Village Name.</strong></td>
          <td><?php echo $row['village_name']; $_SESSION['village_name'] = $row['village_name'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Ward Name.</strong></td>
					<td><?php echo $row['ward']; $_SESSION['ward'] = $row['ward'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Distric Head Name.</strong></td>
					<td><?php echo $row['district_head']; $_SESSION['district_head'] = $row['district_head'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Dagaci.</strong></td>
          <td><?php echo $row['dagaci']; $_SESSION['dagaci'] = $row['dagaci'];  ?> </td>
        </tr>
        <tr>
          <td><strong>Mai Unguwa</strong></td>
          <td><?php echo $row['mai_unguwa']; $_SESSION['mai_unguwa'] = $row['mai_unguwa'];  ?> </td>
        </tr>
				<tr>
          <td><strong>User Name</strong></td>
          <td><?php echo $row['user_name']; $_SESSION['user_name'] = $row['user_name'];  ?> </td>
        </tr>


    <tr>
	<td colspan="2"><center> <button name="accept">Confirm The Request</button>   </td>
	</tr>
	<?php 
	
	$_SESSION['expiry'] = "2013/2014";
	
mysqli_close($con);
}
?> 
	
	</table>
	<a href="requested.php">Back &laquo; </a>
	<h1> </h1>
  <center>
    <p>&nbsp;</p>
    <p>&nbsp;</p></center>
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
    <p class="fl_right">Supervised by MAISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>