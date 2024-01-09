<?php

$con = mysqli_connect("localhost","root");
$con->select_db ("id_card");

if(mysqli_connect_errno()) {
echo "Fail to connect to mysql: ".mysqli_connect_error();
exit;
}
