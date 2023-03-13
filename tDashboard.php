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
        <a href="tProfile.php">View Profile</a>
        <div align="center">
        <fieldset style="width: 800px;height: 400px;">
        <legend>Places to visit in Bangladesh</legend>
        <table>
            <tr>
                <td><a href="dhaka.php"><img src="images/dhaka.jpg" height="70px" width="130px"></a></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
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