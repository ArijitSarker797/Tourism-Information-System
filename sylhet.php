<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Sylhet</title>
</head>
<body>
	<legend style="text-align: center;"><h2>Place List of Sylhet</h2></legend>
	
	<p align="left"><img src="E:\AIUB\Spring 22-23\Web Tech\Project\photos\Dhaka.jpg"></p>
	<p><b> Ratargul Swamp Forest</b></p>
	<p>Ratargul Swamp Forest is a freshwater swamp forest located in Gowain River, Fatehpur Union, Gowainghat, Sylhet, Bangladesh. Ratargul was once thought to be the only swamp forest in Bangladesh, and one of the few freshwater swamp forests in the world. Later, more swamp forests namely Jugirkandi Mayabon, Bujir Bon and Lokkhi Baor swamp forest were discovered in Bangladesh. The forest is naturally conserved under the Department of Forestry, Government of Bangladesh. Its area is 3, 325.61 acre including 504 acre declared as the animal sanctuary in 2015.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Hazrat Shahjalal Mazar Sharif</b></p>
	<p> It is said that following the conquest, Shah Jalal settled on top of the hillock where the Dargah now sits with some of his companions. The Sultan of Lakhnauti, Shamsuddin Firuz Shah, requested the saint, as a reward, rule over the newly acquired Qasbah of Srihat (Sylhet). However, the latter refused to accept this offer and instead appointed Sikandar Khan Ghazi as the first wazir of the region. Firuz Shah, wanting to somehow reward Shah Jalal, then announced that he would honour the saint by making his residence tax-free. This exemption for the site has continued to the present-day. </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
	<p><b> Lakkatura Tea Garden</b></p>
	<p> SYLHET, IN THE NORTHEAST OF BANGLADESH, is renowned for the beauty of its tea gardens, and among the lot, Lakkatura is considered the most scenic. It is also one of the largest tea gardens in the country, covering a total of 3,200 acres. This estate was officially established in 1875, and it now produces an astounding 550 tons of tea each year.  </p>
	<p align="left"><img src="C:\xampp\htdocs\Project\photos"></p>
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