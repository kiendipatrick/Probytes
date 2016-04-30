
<!--IF CONNECTION IS SUCCESSIFULL LOAD THE FORM ELSE ECHO ERROR-->
<html>
<head>
	<title>Ajax Post</title>
	<link rel="stylesheet" href="css/style.css"/>
	
</head>
<body>
<div class="header">
<h2>  Welcome to a free posting page  </h2>
</div>
	<div class="contentHolder">
<!--form  method="POST" action="insert.php" id="myform" -->
	<table padding="10" cellpadding="10" class="formHolder">

		

			<td class="inputTitle"></td><td>
			<input type="text" placeholder="Type post title."  id="title" />
			</td>
		</tr>
		<tr>
			<td class="inputTitle"></td><td>
			<textarea placeholder="Type post message."  id="body"></textarea></td>
		</tr>
		<tr>
			<td></td><td class="inputSubmit">

			<input type="submit"  value="Post Message"  id="save" /> 

		  </td>
		</tr>
	</table>
<!--/form-->
<div  id="postHolder"></div>
</div>

<script type="text/javascript" src="js/jquery.js" ></script>

<!--AJAX TO INSERT DATA FROM DATABASE-->
<script type="text/javascript">
	$(document).ready(function() {

		$('#save').click(function(){
			 var title = $("#title").val();
			 var body = $("#body").val();

			 $.ajax({
			 	url: "insert.php",
			 	type: "post",
			 	async: false,
			 	data:{
			 		"submit":1,
			 		"title": title,
			 		"body": body,
			 	},
			 	success:function(data){
			 	}
			 	});
			});
	});
</script>




<!--AJAX TO AUTO RETRIEVE DATA FROM DATABASE-->
<script type="text/javascript">
$(document).ready(function() { 
	setInterval(function () {
		$('#postHolder').load('retrieve.php') }, 100); });
</script>

</body>
</html>

<!--IF CONNECTION FAILS DISPLAY ERROR BELOW-->
<?php //}else{echo 'Connection Error!!!<br/>';}?>

