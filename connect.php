<?php

$con =new MySQLi('localhost','root','','crudoperation');

if(!$con)
{
	die(mysqli_error($con));
	
}


?>