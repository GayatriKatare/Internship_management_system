<?php

$con = mysqli_connect("localhost","root","","internship");

if($con->connect_error)
{
	die("Connection Failed!".$con->connect_error);
}

?>