<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Dhaka</title>
</head>
<body>
	<p> <b>Terms and Conditions</b></p>
	<p> Welcome to our IT website! Below are the terms and conditions that govern your use of our website. Please read them carefully before using our website. By using our website, you indicate that you accept these terms and conditions and that you agree to abide by them. If you do not agree to these terms and conditions, please refrain from using our website.

*Intellectual Property Rights
All content on this website, including but not limited to text, graphics, logos, images, audio clips, digital downloads, data compilations, and software, is the property of our company or our content suppliers and is protected by international copyright laws. You may not use any content on our website for commercial purposes without our express written consent.

*Use of Website
You may use our website only for lawful purposes and in accordance with these terms and conditions.</p><br>


<p> <b>Privacy Policies</b></p>
	<p>Thank you for visiting our IT website. We take your privacy seriously, and we want you to feel comfortable using our website. Below are our privacy policies that outline how we collect, use, and protect your personal information. By using our website, you consent to our privacy policies.

1.Information We Collect
We collect both personal and non-personal information when you visit our website. Personal information is any information that can be used to identify you, such as your name, address, email address, phone number, or other identifying information. Non-personal information is any information that cannot be used to identify you, such as your browser type, operating system, or the time and date of your visit.

2.How We Use Your Information
We use the information we collect to improve our website, to provide you with information about our products and services, and to respond to your inquiries. We do not sell or rent your personal information to third parties, and we do not share your personal information with third parties for their marketing purposes. We may share your information with third-party service providers who help us operate our website or who provide other services to us, but these service providers are contractually obligated to keep your information confidential and to use it only for the purposes for which we disclose it to them.

3.Cookies
We use cookies to track your use of our website and to personalize your experience. A cookie is a small text file that is stored on your computer or mobile device when you visit our website. We use cookies to remember your preferences, to understand how you use our website, and to improve our website. You can disable cookies in your browser settings, but this may limit your ability to use our website.

4.Security
We take reasonable measures to protect your personal information from unauthorized access, use, or disclosure. However, no data transmission over the internet can be guaranteed to be completely secure, so we cannot guarantee the security of your personal information.

5.Third-Party Websites
Our website may contain links to third-party websites. We are not responsible for the privacy practices of these third-party websites, so we encourage you to read their privacy policies before providing any personal information to them.

6.Changes to Our Privacy Policies
We may update our privacy policies from time to time. Any changes to our policies will be posted on this page, so we encourage you to check this page periodically for updates.

7.If you have any questions or concerns about our privacy policies, please contact us at [insert contact information].</p>
	
	<br><br>
	<a align:right href="uHome.php"> Back </a><br><br>
	

</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>