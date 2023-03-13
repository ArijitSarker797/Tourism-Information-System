<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Chattogram</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Chattogram</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Chittagong War Cemetery</b></p>
	<p> This cemetery was established to honor Commonwealth soldiers and others who died in World War II. The cemetery was created by the British Army, and there were originally about 400 burials. Graves have since been transferred to this cemetery from the Lushai Hills (Assam) and other isolated sites, and from Chittagong Civil Cemetery; Chandragona Baptist Mission Cemetery; Chiringa Military Cemetery; Cox's Bazar New Military and Civil (Muhammadan) Cemeteries; </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Ethnological Museum</b></p>
	<p> The Ethnological Museum of Chittagong is the only ethnological museum in Bangladesh. Located in Agrabad, Chittagong, it contains displays featuring the history of Bangladesh's tribal people.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Patenga Sea Beach</b></p>
	<p>Patenga is a sea beach of the Bay of Bengal, located 14 kilometres south from the port city of Chattogram, Bangladesh. It is near to the mouth of the Karnaphuli River. The beach is very close to the Bangladesh Naval Academy of the Bangladesh Navy and Shah Amanat International Airport.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Khoiyachara Waterfall</b></p>
	<p> Khoiyachora Waterfall is a hilly waterfall which is situated on the hills of Mirsharai, Chittagong, Bangladesh. Among many other waterfalls in Mirsarai upazila, such as Komoldoho Waterfall, Napittachora Waterfall, Napittachora Waterfall, Sahasradhara Waterfall, Jharjhari Waterfall etc., Khoiyachora waterfall and its corridor is one of the largest in this hilly belt. The Khoiyachora waterfall has a total of seven major waterfalls and many isolated steps. Since the location of the fountain is in Khoiyachora union of Mirsarai Upazila, the waterfall has been named "Khoiyachora Waterfall </p>
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