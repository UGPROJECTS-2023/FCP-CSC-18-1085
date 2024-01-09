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
table{background:blue;width:400px;

color:#FFF;

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
        <li class="active" ><a href="request.php">Apply Now</a></li>
        <li><a href="status.php">Status</a></li>
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
    <h1>REQUEST INDIGENE CERTIFICATE </h1>
<?php
include('db_function.php');

$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$date_of_birth = $_POST['date_of_birth'];
$place_of_birth = $_POST['place_of_birth'];
$address = $_POST['address'];
$occ = $_POST['occ'];
$phone = $_POST['phone'];
//$photo = $_POST['photo'];
$father_name = $_POST['father_name'];
$fpob = $_POST['fpob'];
$faddress = $_POST['fhome'];
$focc = $_POST['focc'];
$fphone = $_POST['fphone'];
$mother_name = $_POST['mother_name'];
$mpob = $_POST['mpob'];
$maddress = $_POST['mhome'];
$mocc = $_POST['mocc'];
$mphone = $_POST['mphone'];
$village_name = $_POST['village'];
$ward = $_POST['ward'];
$district_head = $_POST['dhname'];
$mai_unguwa = $_POST['mugw'];
$username = $_SESSION['username'];

$fileName= $_FILES['photo']['name'];
$tmpName = $_FILES['photo']['tmp_name'];
$filesize = $_FILES['photo']['size'];
$fietype = $_FILES['photo']['type'];

$filepath = 'admin/uploaded' . $fileName;

$result= move_uploaded_file($tmpName , $filepath);


if(!$result) {
echo "Problem occur during creating criminal profile";

exit;
}

//if(!$result) 
//{

//echo "Ops problem occur during submiting your request try again";
//}

$query = "INSERT INTO request(full_name,gender,religion,date_of_birth,place_of_birth ,address,occ,phone,photo,father_name,fpob,faddress,focc,fphone,mother_name,mpob,maddress,mocc,mphone,village_name,ward,district_head,dagaci,mai_unguwa,user_name)

VALUES('$full_name','$gender','$religion','$date_of_birth','$place_of_birth','$address','$occ','$phone','$filepath','$father_name','$fpob','$faddress','$focc','$fphone','$mother_name','$mpob','$maddress','$mocc','$mphone','$village_name','$ward','$district_head','$dagaci','$mai_unguwa','$username')";

if(mysqli_query($con,$query)) {

$query = "INSERT INTO status(username,status)values('$username','We are not yet confirm your application our staff are busy working for other things they will be back for you soon sorry for the inconvenience. Come Back Later!')";

if(mysqli_query($con,$query)){
	
}

echo "We have received your request sucessfully";


}

else {
echo "ops an error occur: ".mysqli_error($con);
exit;

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
  <p class="fl_left">Copyright &copy; FATIMA AMINUMMUSA FCP/CSC/18/1085 </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>