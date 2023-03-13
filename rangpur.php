<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Rangpur</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Rangpur</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Tajhat Jomidaar Bari</b></p>
	<p> Tajhat Palace, Tajhat Rajbari, is a historic palace of Bangladesh, located in Tajhat, Rangpur. This palace now holds the Rangpur museum. Tajhat Palace is situated six km. south-east of the city of Rangpur, on the outskirts of town.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Rangpur Zoo</b></p>
	<p>Recreation Park and Rangpur Zoo, is located in Rangpur, Bangladesh, is the largest zoo in North Bengal and the second largest in Bangladesh in terms of size. With an area of 21.51 acres of lush green trees and grasses, the zoo is located east side of Hanuman-tola road beside Police Line Road, not far from Rangpur District Administration Office. Rangpur Central Zoo is one of the recreation spots in Rangpur city.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Rangpur Town Hall</b></p>
	<p> Rangpur Town Hall is a City hall situated at the heart of the city of Rangpur, Bangladesh. Established in 1896 by the historical Rongopur Natya Samaj it is one of the oldest of its kind in Bangladesh. It has a glorious history in the whole timeline of civic society in Rangpur. It is one of the best known landmarks of the city as well. </p>
	<br><br>
	<a align:right href="uHome.php"> Back </a><br><br>
	<a align:right href="help.php"> <u>Help </u></a>
</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>