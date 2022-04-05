<?php
$connection = mysqli_connect("localhost","root","","project_alpha");

if(mysqli_connect_errno()){
	die("connect error : " . mysqli_connect_errno());
}
?>