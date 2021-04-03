<?php
//connect to MYSQL
$con=mysqli_connect("localhost","root","","shoutstb");

//test connection_aborted
if (mysqli_connect_errno()){
	echo 'Failed to connect to MYSQL: '.mysqli_connect_error();
}

?>