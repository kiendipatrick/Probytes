<?php
error_reporting(0);
include_once('conn.php');
$results = $connect->query("SELECT body, title FROM tb_posts ORDER BY post_id DESC");
if ($results->num_rows > 0)
{
while ($row = $results->fetch_assoc())
    {
	# code...

	echo '<div class="postBorder">'.'<p class="postTitle">'. $row['title'].'</p>';
	echo $row['body']. '</div>'.'<br/>';
   }

}
else
	{ 
		
		echo "<span class='nofound'>No post Yet</span>";
	}

?>
