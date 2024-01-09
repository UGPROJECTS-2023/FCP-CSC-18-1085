<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>ONLINE BIRTH CERTIFICATE PROCESSING SYSTEM </title>
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
    <center><div style="color:#FFF;width:1000px;"><font size="5px">ONLINE BIRTH CERTIFICATE PROCESSING SYSTEM
    </font></div></center>
    <div id="topnav">
      <ul>
        <li ><a href="home.php">Home</a></li>
        <li class="active" ><a href="request.php">Request B_Cert</a></li>
        <li><a href="status.php">Status</a></li>
        <li><a href="print.php">Print B_Cert</a></li>
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
    <h1>REQUEST BIRTH CERTIFICATE</h1>
    <table width="430" height="325" border="0" cellpadding="7">
      <form action="request_script.php" enctype="multipart/form-data" method="post">
        <tr>
        <th colspan="2"><marquee> Make sure you fill this field appropriate other wise you will not get your certificate</marquee></th>
        </tr>
         <tr>
		 <td><strong>Registration Center: </strong></td>
          <td><input type="text" name="reg_cen" placeholder="Registration Center" /></td>
        </tr>
		<td><strong>Town/Village: </strong></td>
          <td><input type="text" name="tv" placeholder="Town/Village" /></td>
        </tr>
		<td><strong>L.G.A</strong></td>
          <td><input type="text" name="local" placeholder="e.g Kazaure" /></td>
        </tr>
		<td><strong>Stete: </strong></td>
          <td><input type="text" name="state" placeholder="e.g Jigawa" /></td>
        </tr>
          <td><strong>Member Full Name.</strong></td>
          <td><input type="text" name="mem_name" placeholder="Member Full Name" /></td>
        </tr>
		<td><strong>Fathers Full Name.</strong></td>
          <td><input type="text" name="fathername" placeholder="Fathers Full Name" /></td>
        </tr>
		<td><strong>Mothers Full Name.</strong></td>
          <td><input type="text" name="mothername" placeholder="Mothers Full Name" /></td>
        </tr>
 
         <tr>
          <td><strong>Gender</strong></td>
          <td>
          <select name="sex">
          	<option>Male</option>
            <option>Female</option>
            </select>
        </td>
        </tr>
		<td><strong>Place of Birth: </strong></td>
          <td><input type="text" name="pob" placeholder="Town/Village" /></td>
        </tr>
		<tr>
          <td><strong>Date Of Birth.</strong></td>
          <td><input type="text" name="dob" placeholder="Day / Month / Year" /></td>
        </tr>
		<tr>
          <td><strong>Certificate No.</strong></td>
          <td><input type="text" name="certno" placeholder="Volume/Year/Entery No."/></td>
        </tr>
		<tr>
          <td><strong>Place Of Issue: </strong></td>
          <td><input type="text" name="poi" placeholder="Place Of Issue"/><//></td>
        </tr>
		<tr>
          <td><strong>Name of registrar: </strong></td>
          <td><input type="text" name="nor" placeholder="name of registrar"/><//></td>
        </tr>
        <tr>
          <td><strong>Date of Issue.</strong></td>
          <td><input type="text" name="doi" placeholder="Day / Month / Year" /></td>
        </tr>
        
        <tr>
          <td colspan="2"><center>
            <input type="submit" value="Request" />
            <input type="reset" value="Reset Form" /></td>
        </tr>
        <tr>

        </tr>
      </form
		>
    </table>
    <p>&nbsp;</p>
  </center>
  <center>
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
    <p class="fl_left">Copyright &copy;  FATIMA AMINU MUSA FCP/CSC/18/1085  </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>