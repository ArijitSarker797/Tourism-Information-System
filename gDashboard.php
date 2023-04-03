<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h4><a href="index.html">Home</a></h4>
        <h1>welcome <?=$_SESSION['username']?>!</h1>
        <a href="gProfile.php">View Profile</a>
        
        <div align="center">
        <fieldset style="width: 800px;height: 400px;">
        <legend>Places to visit in Bangladesh</legend>
        <table>
            <tr>
                
            </tr>
        </table>
        </fieldset>
        </div>
       

       

    <a href="logout.php"> logout </a>

</body>
</html>

<?php 
    }else{
        header('location: index.html'); 
    }
?>