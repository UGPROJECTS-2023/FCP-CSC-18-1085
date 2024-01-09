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
    <h1>REQUEST INDIGENE CERTIFICATE</h1>
    <table width="450" height="325" border="0" cellpadding="8">
      <form action="request_script.php" enctype="multipart/form-data" method="post">
        <tr>
        <th colspan="2"><marquee> Make sure you fill this field appropriate other wise you will not get your indigene cert</marquee></th>
        </tr>
        <tr>
        <th colspan="2"> Applicant Informatione</th>
        </tr>
  <tr>
          <td><strong>Full Name.</strong></td>
          <td><input type="text" name="full_name" placeholder="Full Name" required /></td>
        </tr>
        <tr>
          <td><strong>Gender</strong></td>
          <td>
          <select name="gender" required>
          	<option>Male</option>
            <option>Female</option>
            </select>
          
          </td>
        </tr>
        <tr>
          <td><strong>Religion.</strong></td>
          <td><input type="text" name="religion" placeholder="Religion" required /></td>
        </tr>
        <tr>
          <td><strong>Date Of Birth.</strong></td>
          <td><input type="text" name="date_of_birth" placeholder="Date of Birth" required /></td>
        </tr>
        
        <tr>
          <td><strong>Place of Birth.</strong></td>
          <td><input type="text" name="place_of_birth" placeholder="Place of Birth" required /></td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><input type="text" name="address" placeholder="Home Address" required /></td>
        </tr>
        <tr>
          <td><strong>Occupation.</strong></td>
          <td><input type="text" name="occ" placeholder="Occupation" required /></td>
        </tr>
        <tr>
          <td><strong>Phone No.</strong></td>
          <td><input type="text" name="phone" placeholder="Contact" required /></td>
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
          <td><input type="text" name="father_name" placeholder="Father Name" required /></td>
        </tr>
        <tr>
          <td><strong>Place of Birth.</strong></td>
          <td><input type="text" name="fpob" placeholder="Place of Birth" required /></td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><input type="text" name="fhome" placeholder="Home Address" required /></td>
        </tr>
        <tr>
          <td><strong>Occopation.</strong></td>
          <td><input type="text" name="focc" placeholder="Occopation" required /></td>
        </tr>
        <tr>
          <td><strong>Phone No.</strong></td>
          <td><input type="text" name="fphone" placeholder="Phone No" required /></td>
        </tr>
        <tr>
        <th colspan="2"> Mother Informatione</th>
        </tr>
        <td><strong>Mother Name.</strong></td>
          <td><input type="text" name="mother_name" placeholder="Mother Name" required /></td>
        </tr>
        <tr>
          <td><strong>Place of Birth.</strong></td>
          <td><input type="text" name="mpob" placeholder="Place of Birth" required /></td>
        </tr>
        <tr>
          <td><strong>Home Address.</strong></td>
          <td><input type="text" name="mhome" placeholder="Home Address" required /></td>
        </tr>
        <tr>
          <td><strong>Occopation.</strong></td>
          <td><input type="text" name="mocc" placeholder="Occopation" required /></td>
        </tr>
        <tr>
          <td><strong>Phone no.</strong></td>
          <td><input type="text" name="mphone" placeholder="Phone no" required /></td>
        </tr>
        <tr>
        <th colspan="2"> Other Informatione</th>
        </tr>
         <tr>
          <td><strong>Village Name.</strong></td>
          <td><input type="text" name="village" placeholder="Village Name" required /></td>
        </tr>
        <tr>
          <td><strong>Ward Name.</strong></td>
          <td><input type="text" name="ward" placeholder="Ward Name" required /></td>
        </tr>
        <tr>
          <td><strong>Distric Head Name.</strong></td>
          <td><input type="text" name="dhname" placeholder="Distric Head Name" required /></td>
        </tr>
        <tr>
          <td><strong>Dagaci.</strong></td>
          <td><input type="text" name="dagaci" placeholder="Dagaci" required  /></td>
        </tr>
        <tr>
          <td><strong>Mai Unguwa</strong></td>
          <td><input type="text" name="mugw" placeholder="Mai Unguwa" required /></td>
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
  <p class="fl_left">Copyright &copy;  FATIMA AMINU MUSA FCP/CSC/18/1085 </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>