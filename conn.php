<?php 

$connect= new mysqli("127.0.0.1",'root','','ajaxpost_db');
if($connect->connect_error)
{
	die("Cannot connect:". $connect->connect_error);
}else{return TRUE; }

?>