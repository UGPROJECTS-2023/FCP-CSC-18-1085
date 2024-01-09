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
#success {
		background-color:GREEN;
		color:white;
		border: 2px solid black;
		-webkit-border-radial:20px;
		height:auto;
		width:100%;	
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
        <li class="active"><a href="requested.php">Apply Now</a></li>
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
    <h1> CERT GENERATED PAGE</h1></center>
            <p style="float:left;">Cert Generating Page</p>
            <p style="float:left;">&nbsp;</p>
    <p style="float:left;">&nbsp;</p>
            <p><br />
              
              
  <?php
	
  require_once('db_function.php');
  
  $full_name = $_SESSION['full_name'];
  $gender = $_SESSION['gender'];
  $religion = $_SESSION['religion'];
  $date_of_birth = $_SESSION['date_of_birth'];
  $place_of_birth = $_SESSION['place_of_birth'];
  $address = $_SESSION['address'];
  $occ = $_SESSION['occ'];
  $phone = $_SESSION['phone'];
  //$photo = $_POST['photo'];
  $father_name = $_SESSION['father_name'];
  $fpob = $_SESSION['fpob'];
  $faddress = $_SESSION['fhome'];
  $focc = $_SESSION['focc'];
  $fphone = $_SESSION['fphone'];
  $mother_name = $_SESSION['mother_name'];
  $mpob = $_SESSION['mpob'];
  $maddress = $_SESSION['mhome'];
  $mocc = $_SESSION['mocc'];
  $mphone = $_SESSION['mphone'];
  $village_name = $_SESSION['village'];
  $ward = $_SESSION['ward'];
  $district_head = $_SESSION['dhname'];
  $dagaci = $_SESSION['dagaci'];
  $mai_unguwa = $_SESSION['mugw'];
  $user_name = $_SESSION['user_name'];
  
 /* $fileName= $_FILES['photo']['name'];
  $tmpName = $_FILES['photo']['tmp_name'];
  $filesize = $_FILES['photo']['size'];
  $fietype = $_FILES['photo']['type'];
  
  $filepath = 'admin/images' . $fileName;
  
  $result= move_uploaded_file($tmpName , $filepath);
  
  
  if(!$result) {
  echo "Problem occur during creating criminal profile";
  
  exit;
  }
  **/
  //if(!$result) 
  //{
  
  //echo "Ops problem occur during submiting your request try again";
  //}
  
  $query = "INSERT INTO processed(full_name,gender,religion,date_of_birth,place_of_birth ,address,occ,phone,photo,father_name,fpob,faddress,focc,fphone,mother_name,mpob,maddress,mocc,mphone,village_name,ward,district_head,dagaci,mai_unguwa,user_name)
  
  VALUES('$full_name','$gender','$religion','$date_of_birth','$place_of_birth','$address','$occ','$phone','$filepath','$father_name','$fpob','$faddress','$focc','$fphone','$mother_name','$mpob','$maddress','$mocc','$mphone','$village_name','$ward','$district_head','$dagaci','$mai_unguwa','$user_name')";
  
if(mysqli_query($con, $query)) {

echo "<br>";

	echo '<div id="success">INDIGENE CERTIFICATE IS GENERATED SUCCESSFULLY</div>';	
} else 
		{
			
	echo mysqli_error($con);	
}
	
mysqli_close($con);

?> 
            </p>
            <p>&nbsp; </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
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
  <p class="fl_left">Copyright &copy;FATIMA AMINU MUSA FCP/CSC/18/1085 </p>
    <p class="fl_right">Supervised by MISS FATIMA AMINU MUSA </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>