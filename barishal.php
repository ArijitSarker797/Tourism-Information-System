<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Barishal</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Barishal</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Baitul Aman Jame Masjid and Eidgah Complex</b></p>
	<p>The Baitul Aman Jame Masjid Complex, commonly known as Guthia Mosque of Barisal, is a mosque complex of Bangladesh having a land area of 14 acres, comparing to the 8.30 acres land area of the national mosque Baitul Mukarram of the country. The Baitul Aman Jame Masjid Complex consists of a mosque, a large eidgah, a graveyard, three lakes, a madrasa and an orphanage. Established on December 16, 2003, Guthia Mosque is also a tourist spot in Bangladesh.</p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Floating Guava Market</b></p>
	<p> The southern part of Bangladesh is known for its guavas, often known as 'Bengal's Apple.' Farmers in Pirozpur rely largely on guava growing, particularly in Jhalakathi Sadar Upazila, Swarupkathi, and Banaripara Upazila.

The floating guava market is found mostly at Bhimruli, Atghar, and Kuriana in Pirojpur's Swarupkathi Upazila. On 31,000 acres of land, 20,000 households from 26 communities cultivate guava. About 60 per cent of the local guava market need is supplied from here. </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Fatrar Char</b></p>
	<p> Fatrar Char now is a part of Sundarban Forest. Fatra is a common type tree of mangrove forest Sundarban. Now it is re known as Tengragiri Wildlife Sanctuary. There are few boats daily leave for this forest from Kuakata Sea Beach, and it is about 4 hours tour including Fishermen village. </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Kuakata Sea Beach</b></p>
	<p>Kuakata is locally known as 'Sagor Konnya' (Daughter of Sea). It offers a full view of both Sunrise & Sunset from it's same wide sandy beach. It stretches for about 30 km long and 6 km wide & the sandy beach has gentle slopes into the Bay-of-Bengal. Kuakata is also a sanctuary for migratory winter birds.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Payra Bridge</b></p>
	<p> Payra Bridge is a road bridge across the Burishwar River. It connects Barisal and Patuakhali, linking the southwest of the country to the northern regions. </p>
	<br><br>
	<a align:right href="tDashboard.php"> Back </a><br><br>
	<a align:right href="help.php"> <u>Help </u></a>
</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>