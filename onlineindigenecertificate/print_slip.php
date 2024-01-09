<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>ADMINISTRATOR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="admin/styles/layout.css" type="text/css" />
<script type="text/javascript" src="admin/scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="admin/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="admin/scripts/jquery.jcarousel.setup.js"></script>

<style>
table {background:#fff;width:450px;text-align:left;height:500px;}
</style>
</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    
	
	<center><div style="color:#99CC00;width:1000px;"><font size="6px">ONLINE INDEGINE PROCESSING SYSTEM</font></div></center>
	<div id="logo"></div>
    <div id="topnav">
      <ul>
        <li ><a href="index.html">Home</a></li>
        <li class="active"><a href="clearance.php">clearance</a></li>
        <li><a href="slip.php">Slip</a></li>
        <li class="last"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
        <li><img src="admin/images/demo/nigeria-coat-of-arms.png" alt="" />
          <div class="floater">
            <h2>About Custom !</h2>
            <p>The Ncs was established in 1981 to saddle the responsibility of revenue collection, accounting for the same and anti-smuggling activities
          </div>
        
		
          <div class="floater">
                      </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="admin/images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="admin/images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <p>
    <p>
	
	
		<?php
	require_once('db_function.php');
	
	
 
 $id = $_GET['id'];
 
$result = mysqli_query($con, "Select * from slip where id='$id'");



while($row= mysqli_fetch_array($result)) {
?>
<table border="1">
<tr>
<td><strong>Company Name: </td>
<td><?php echo $row['company_name'];?></td>
</tr>
<tr>
<td><strong>Name of Importer: </td>
<td><?php echo $row['name_of_importer'];?></td>
</tr>
<tr>
<td><strong>Phone: </td>
<td> <?php echo $row['phone'];?></td>
</tr>
<tr>
<td><strong>Address:</td>
<td> <?php echo $row['address'];?></td>
</tr>
<tr>
<td><strong>Plate Number</td>
<td><?php echo $row['platenumber'];?></td>
</tr>
<tr>
<td><strong>State of Import</td>
<td><?php echo $row['state_of_import'];?></td>
</tr>
<tr>
<td><strong>Import Name</td>
<td><?php echo $row['import_name'];?></td>
</tr>

<tr>
<td><strong>Date</td>
<td> <?php echo $row['date'];?></td>
</tr>
</table>
<?php
}
mysqli_close($con);
?>

	<center><input type="button" value="Print Slip" onclick="window.print()" />
	
	
	
	&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="box contactdetails">
      <h2>Our Contact Details !</h2>
      <ul>
        <li>NCS</li>
        <li>Street Name &amp; Number</li>
        <li>DUTSE</li>
        <li>Postcode/Zip +234 </li>
        <li>Tel: 09079299404  </li>
        <li>Email: Fatimaaminumusa7@gmail.com</li>
        
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
  <p class="fl_left">Copyright &copy; FATIMA AMINU MUSA FCP/CSC/18/1085 </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
