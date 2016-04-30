<?php

if(isset($_POST['submit']))
{
	
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databaseName = "ajaxpost_db";
$title = $_POST['title'];   
$body = $_POST['body'];

$connect= mysqli_connect($hostname, $username, $password, $databaseName);

if(empty($body)|| empty($title))

	echo "All fields are required";

else{
$query = "INSERT INTO `tb_posts`(`title`, `body`) VALUES ('$title','$body')";
$results = mysqli_query($connect, $query);
if ($results) {
	# code...
	echo "Post Inserted";
	exit();
} else{ echo "Error submitting"; }
}
}
?>