<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Closing Session</title>
</head>

<body>
	
	<?php
	
	
		session_start();
	
		session_destroy();
	
		header("location:login_form.php");
	
	
	
	
	
	
	?>
	
</body>
</html>