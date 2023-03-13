<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>KHulna</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Khulna</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Sixty Dome Mosque</b></p>
	<p> The Sixty Dome Mosque, is a mosque in Bagerhat, Bangladesh. It is a part of the Mosque City of Bagerhat, a UNESCO World Heritage Site. It is the largest mosque in Bangladesh from the sultanate period. It was built during the Bengal Sultanate by Khan Jahan Ali, the governor of the Sundarbans. It has been described as "one of the most impressive Muslim monuments in the whole of South Asia. </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Shilaidaha Rabindra Kuthibari</b></p>
	<p>Shilaidaha Rabindra Kuthibari, in short Shilaidah Kuthibari, is one of the major tourist places in Bangladesh. It is located seven kilometers north of Kushtia on the banks of Padma in Kumarkhali Upazila of Kushtia District  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Divisional Museum, Khulna</b></p>
	<p> Khulna Divisional Museum is the only museum of Khulna City. It was established by Bangladesh Archaeological Department. It is the second largest museum in Bangladesh after Bangladesh National Museum by area. This museum is full of archaeological evidence, structures & photos of South Bengal. The archaeological excavation leftovers from "Bharata Bhayana" are kept here. Bharat Rajar Deul, has yielded the substantial ruins of a brick-built curious structure. It has also yielded some busts of princely male figures, Hindu God, Goddess structure, potteries of early medieval origin etc. On stylistic ground they may be dated in circa 5th-6th century AD. Gold and silver coin from Emperor Jehangir's time is also displayed here. </p>
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