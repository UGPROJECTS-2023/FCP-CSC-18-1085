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
#text {
	
	line-height:20px;	
}

#student_detail {
	
	width:300px;
	background:#000;
	color:#FFF;
	height:auto;	
	float:right;
	text-align:left;
}

</style>

</head>
<body id="top"><em></em>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <center><div style="color:#FFF;width:1000px;"><font size="5px">ONLINE BIRTH REGISTRATION SYSTEM
    </font></div></center>
    <div id="topnav">
      <ul>
        <li ><a href="home.php">Home</a></li>
        <li ><a href="requested.php">Requested Birth Cert</a></li>
        <li><a href="confirmed.php">Confirmed Cert</a></li>
        <li><a href="edit_card.php">Edit Cert</a></li>
        <li class="active"><a href="complaint.php">Complaint</a></li>
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
    <h1>Complaint From Members</h1></center>
                 
            	


<?php

require_once('db_function.php');


$id = $_GET['id'];

$_SESSION['id'] = $id;

$result = mysqli_query($con, "select * from complaint where id='$id'");


$num_rows = mysqli_num_rows($result);


while($row= mysqli_fetch_array($result)) {

?>
<h1> <?php echo $row['subject'];?> </h1>

<?php 

echo '<div id="text">';
 echo $row['complaint'];
echo '</div>';

echo '<div id="student_detail">';

?>

From: <?php echo $row['username']; ?>  Date: <?php echo $row['username']; ?>
<?php

echo '</div>';
}

?>&nbsp;</td>

</tr>
</table>

</table>




<br />
<br />


<?php

require_once('db_function.php');


$id = $_GET['id'];

$_SESSION['id'] = $id;

$result = mysqli_query($con, "select * from complaint where reply_id='$id'");


$num_rows = mysqli_num_rows($result);


while($row= mysqli_fetch_array($result)) {

?>
<h1> <?php echo $row['subject'];?> </h1>

<?php 

echo '<div id="text">';
 echo $row['complaint'];
echo '</div>';

echo '<div id="student_detail">';

?>

From: <?php echo $row['username']; ?> Date: <?php echo $row['date']; ?>
<?php

echo '</div>';
}
mysqli_close($con);
?>&nbsp;</td>

</tr>
</table>

</table>

<br />
<br />
<form action="replied.php" method="POST">

<p><textarea name="reply" cols="66" rows="10"> </textarea></p>

<p> <input type="submit"  value="Reply" /></p>

</form>


	<h1> </h1>
  <center>
    <p>&nbsp;</p>
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
  <p class="fl_left">Copyright &copy;  FATIMA AMINU MUSA FCP/CSC/18/1085  </p>
    <p class="fl_right">Supervised by MISS FATIMA MUHAMMAD</p>
    <br class="clear" />
  </div>
</div>
</body>
</html>