<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Mymensingh</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Mymensingh</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Shilpacharya Zainul Abedin Sangrahashala</b></p>
	<p> Zainul Shah Ali Abedin Sangrahashala is an art museum in Mymensingh, Bangladesh. Established in 1975, it contains the collections of the artist Shilpacharya Zainul Abedin. The art gallery was established in Mymensingh as this is where the artist spent his early days. Abedin, a pioneer of the country's modern art movement, created works of art on subject matters such as the Bengal famine of 1943 and the peoples' independence. </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> sherpur</b></p>
	<p> Sherpur region was a part of the kingdom of the Kamarupa in the ancient time and eventually became part of the Mughal Empire's Bengal Subah. Fakir-Sannyasi Revolts were held against the East India Company and the local zamindars from the time of Warren Hastings to Lord Cornwallis. Tipu Shah, leader of the Fakir Movement, declared sovereignty in the area and established his capital at Gajripa. Peasant conferences were held in 1906, 1914 and 1917 at Kamarer Char of Sherpur under the leadership of Khos Muhammad Chowdhury.</p>
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