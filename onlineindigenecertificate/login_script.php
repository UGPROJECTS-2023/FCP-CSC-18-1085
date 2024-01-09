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
table{background:#99CC00;width:250px;}
</style>

</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <center><div style="color:#99CC00;width:1000px;"><font size="6px">ONLINE INDEGINE PROCESSING SYSTEM</font></div></center>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
        <li><img src="images/demo/govTech_NigerianCustoms-Badge1.jpg" alt="" />
          <div class="floater">
            <h2>About Custom !</h2>
            <p>Dutse was established in 1981 to sadddle the responsiblity of revenue collection, accounting for the same and anti-smuggliing activities</p>
          </div>
        </li>
        <li><img src="images/demo/nigeria-coat-of-arms.png" alt="" />
          <div class="floater">
            <h2>Collection of Revenue.</h2>
            <p>NCS are responsible of revenue collection, there are using computer software package by ARCNCS</p>
          </div>
        </li>
        <li><img src="images/demo/westerdam-ship-size.jpg" alt="" />
          <div class="floater">
            <h2>Security Function And Anti-Smuggling</h2>
            <p>This is another responsibility of NCS, there are responsible of putting wall to the improper way of exchanging goods and insure adequate security to the nation.</p>
          </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
  <center><h1><blink>LOGGED IN SUCCESFULLY<blink></h1></center>
	 <?php 
require_once('db_function.php');

$username = $_POST['username'];
$password = $_POST['password'];



$query = "select * from company_info where username = '$username' and password = '$password'";

$result = $con->query($query);

if($result->num_rows) {
session_start();
$_SESSION['username'] = $_POST['username'];

$username = $_SESSION['username'];

$result = mysqli_query($con, "Select * from company_info where username = '$username'");
while($row=mysqli_fetch_array($result)){
	echo "<center>";
	echo "You are welcome"." ".$row['username'];
	echo "<br>";
	echo '<a href="index.html">Continue</a>';
	echo "</center>";
}


mysqli_close($con);
}

else {

?>
  <script type="text/javascript">
alert("Wrong Username or password");
window.location="index.php";
</script>
  <?php

}

?>	
    </marquee>
<p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      <h2>Our Contact Detail </h2>
      <p><ul>
	  <li>Phone: 09079299404 </li>
	  <li>Email: info@Dutsejigawa.com
	  <li>Address: DUTSE L.G.A Jigawa State</li>
	  </ul>
	  </p>
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

