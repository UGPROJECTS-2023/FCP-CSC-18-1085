<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Online Student ID Card Processing Information System </title>
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
    <center><div style="color:#FFF;width:1000px;"><font size="5px">ONLINE BIRTH REGISTRATION SYSTEM
    </font></div></center>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
        <li> <img src="images/image7.jpg"/>
          <div class="floater">
            <h2>About This Project !</h2>
            <p>This project is all about processing Dutse Local Government Birth Certificate For Dutse Indegine</p>
          </div>
        </li>
        <li> <img src="images/IMG-20150704-WA0010.jpg"/>
          <div class="floater">
            <h2>How it works!.</h2>
            <p>First of all register as new member or login as existing </p>
          </div>
        </li>
        <li> <img src="images/IMG-20150704-WA0014.jpg" />
          <div class="floater">
            <h2>Contact Us</h2>
            <p>For any inquery or complaint hit us on the following contacts Phone: 09079299404 Email: info@dutse.com</p>
          </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
  
  <?php 
  
 include('db_function.php');
 
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $gender = $_POST['gender'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $password = md5($password);
 
 
 $query = "INSERT INTO reg(fname,lname,gender,username,password)values('$fname','$lname','$gender','$username','$password')";
 
 if(mysqli_query($con, $query)) {
	
?>	
<center>
  <p>Registered Sucessfully <br />
    </p>
  <p>Login <a href="index.php">Here</a></p>
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

<?php
 }
 	else {
	echo mysqli_error();	
	}
 
 ?> 
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
 <p class="fl_left">Copyright &copy;  FATIMA AMINU MUSA FCP/CSC/18/1085  </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>