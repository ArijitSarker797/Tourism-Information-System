<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Dhaka</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Dhaka</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Lalbag fort</b></p>
	<p> Lalbagh Fort was built as the official residence of the governor of the Mughal province of Bengal, Bihar and Orissa. The complex includes the Mughal governor's house, the tomb of Pari Bibi and a mosque. It is covered by lawns, fountains and water channels. Its two south gates were previously grand arches.</p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Liberation War Museum</b></p>
	<p> Currently, the museum has in its collection 21,000 (August 2016) objects, which include rare photographs, documents, coverage in both electronic and print media and materials used by freedom fighters and martyrs of the Liberation War. </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Bangladesh National Zoo</b></p>
	<p>Bangladesh National Zoo, is a zoo located in the Mirpur section of Dhaka, the capital city of Bangladesh. The zoo contains many native and non-native animals and wild life, and hosts about three million visitors each year. On 5 February 2015, the name changed from Dhaka Zoo to Bangladesh National Zoo  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Bangladesh National Parliament</b></p>
	<p>Jatiya Sangsad Bhaban or National Parliament House, is the house of the Parliament of Bangladesh, located at Sher-e-Bangla Nagar in the Bangladeshi capital of Dhaka.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Dhakeshwari National Temple</b></p>
	<p>  Dhakeshwari National Temple is a Hindu temple in Dhaka, Bangladesh. It is state-owned, giving it the distinction of being Bangladesh's 'National Temple'. The name "Dhakeshwari" means "Goddess of Dhaka". It is also the largest Hindu temple in Bangladesh.</p>
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