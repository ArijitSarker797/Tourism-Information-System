<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Help</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Help Lines</h2></legend>
	<p> Police Phone Number: 999 </p>
	<p> RAB Phone Number: 999 </p>
	<p> Fire Service Phone Number: 999 </p>
	
	<a align:right href="uHome.php"> Back </a>
</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>