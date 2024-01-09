<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>ONLINE INDEGINE PROCESSING SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
<style>
table{background:green;width:400px;

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
            <p>This project is all about processing of Dutse Local Government Indegine Certificate For Dutse L.G.A Indegine</p>
          </div>
        </li>
        <li> <img src="images/IMG-20150704-WA0010.jpg"/>
          <div class="floater">
            <h2>How it works!.</h2>
            <p>First of all register as new Members or login as existing, AND APPLY FOR INDEGINE</p>
          </div>
        </li>
        <li> <img src="images/IMG-20150704-WA0014.jpg" />
          <div class="floater">
            <h2>Contact Us</h2>
            <p>For any inquery or complaint hit us on the following contacts Phone: 09079299404 Email: info@Dutsejigawa.com.</p>
          </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">

  <div id="container">
  <p style="float:right">Admin Login <a href="admin/index.php">Here</a></p>
  <center><h1><blink><font color="blue">USERS LOGIN PAGE<blink></h1></font></center>
  
  <?php
  
  if(isset($_POST['login'])) {
	  
  include('db_function.php');
  
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);



$query = "select * from reg where username = '$username' and password = '$password'";

$result = $con->query($query);

if($result->num_rows) {
session_start();
$_SESSION['username'] = $_POST['username'];

header('location:home.php');

}


else {

	echo "Wrong Username or Password";

}
mysqli_close($con);
  }
  
?>	

  <center>
    <table border="0" cellpadding="5">
        <form action="index.php"method="post">
          <tr>
            <td><strong>Username</strong></td>
            <td><input type="text" name="username" /></td>
          </tr>
          <tr>
            <td><strong>Password</strong></td>
            <td><input type="password" name="password" /></td>
          </tr>
          <tr>
            <td colspan="2"><center><input type="submit" value="login"  name="login"/></td>
          </tr>
          <tr>
          <td colspan="2"> <center><a href="register.php">Register Here</a></td>
          </tr>
        </form
		>
      </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    </h1></center>
    </marquee>
<p>&nbsp;</p>
    <p>&nbsp;</p>
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
   <p class="fl_left">Copyright &copy;  FATIMA AMINU MUSA </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>