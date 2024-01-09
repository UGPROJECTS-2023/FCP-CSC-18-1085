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
table{width:600px;

color:black;
border:#FFF;


}
tr {
	border:#FFF;	
}

td {
border:#FFF;
}
th {
	border:#FFF;	
}
#box {
		text-align:left;
		width:600px;
		border: 5px solid green;
		height:380px;
		-webkit-border-radius: 23px;
		padding:5px;
}

#box2 {
		text-align:left;
		width:600px;
		border: 5px solid black;
		height:300px;
		padding:15px;
}
#text {
		line-height:25px;
}

#back_card {
	position:absolute;
	top:232px;
	left:406px;
	width: 278px;
	height: 309px;
	background-image:url(../images/back_card.jpg)
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
        <li  ><a href="request.php">Apply Now</a></li>
        <li><a href="status.php">Status</a></li>
        <li ><a href="print.php">Print Indegine</a></li>
        <li ><a href="complaint.php">Complaint</a></li>
        <li class="active"><a href="inbox.php">Inbox</a></li>
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
    <h1>CLICK ON THE MESSAGE TO READ THE REPLY FROM ADMIN</h1></center>
                 
            	


<?php

require_once('db_function.php');

$username = $_SESSION['username'];


$result = mysqli_query($con, "select * from complaint where username='$username'");


$num_rows = mysqli_num_rows($result);







while($row= mysqli_fetch_array($result)) {

echo "<tr>";


?>
<h1> <a href="complaint_script.php?id=<?php echo $row['id']; ?>"> <?php echo $row['subject'];?></a></h1>
<?php

}
mysqli_close($con);
?>&nbsp;</td>
</form>
</tr>
</table>

</table>

	<h1> </h1>

<br />
<br />


    
    


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
 <p class="fl_left">Copyright &copy; FATIMA AMINU MUSA FCP/CSC/18/1085 </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD </p>
    <br class="clear" />
  </div>
</div>
</body>
</html>