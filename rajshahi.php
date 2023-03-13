<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Rajshahi</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Rajshahi</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Varendra Research Museum</b></p>
	<p> Varendra Museum is a museum, research centre, and popular visitor attraction at the heart of Rajshahi and maintained by Rajshahi University in Bangladesh. It is considered the oldest museum in Bangladesh. It was the first museum to be established in East Bengal in 1910. The museum started out as the collection for Varendra Anushandan Samiti and got its current name in 1919.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Shahid Zia Shishu Park</b></p>
	<p> The park is named after Ziaur Rahman, the 7th president of Bangladesh. In 1995, Rajshahi City Corporation undertook a project to build an amusement park in the city. On February 9, 2005, foundation stone was laid, although the construction work of the park started one year before. The park was opened to the public on February 1, 2006, on a trial basis, and officially inaugurated on February 25, 2006 </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Sompur Mahavihara</b></p>
	<p> Somapura Mahavihara or Paharpur Buddhist Vihara in Paharpur, Badalgachhi, Naogaon, Bangladesh is among the best known Buddhist viharas or monasteries in the Indian Subcontinent and is one of the most important archaeological sites in the country. It was designated as a UNESCO World Heritage Site in 1985. </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b>Puthia Rajbari</b></p>
	<p>Puthia Rajbari is a palace in Puthia Upazilla, Rajshahi in Bangladesh, built in 1895, for Rani Hemanta Kumari Debi, it is an example of Indo-Saracenic Revival architecture. The palace is sited on the Rajshahi Natore highway 30 km from the east of the town and one km south from Rajshahi Natore highway. It is currently used by Lashkarpur Degree College but is in a poor state of repair.  </p>
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