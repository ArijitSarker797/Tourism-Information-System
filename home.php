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
        
        <h3>Admin list</h3>

        <table border="1">
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
            </tr>
        <?php 
            $file = fopen('tour.txt', 'r');
            $sr=1;
            

            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if(count($user) > 1){
        ?>
            <tr>
                <td><?=$sr?></td>
                <td><?=$user[0]?></td>
                <td><?=$user[1]?></td>
                <td><?=$user[2]?></td>
                <td><?=$user[3]?></td>
                <td><?=$user[4]?></td>
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table>

        <table border="1" align="center"height="600px" width="600px">
        <tr>
            <td colspan="2" align="center">Admin Profile</td>
        </tr>
        <?php 
            $file = fopen('tour.txt', 'r');
            $sr=1;
            

            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if(count($user) > 1){
        ?>
        <tr>
            <td>
                <ul>Name:<?=$user[0]?></ul>
                <ul>Password:<?=$user[1]?></ul>
                <ul>Email:<?=$user[2]?></ul>
                <ul>Phone:<?=$user[3]?></ul>
                <ul>Date of Birth:<?=$user[4]?></ul>
            </td>
            <td>
                <ul><img src="images/<?=$user[5]?>" alt="" height="200px" width="140px" align="center"></ul>
                <ul><a href="changePicture.php">Change Picture</a></ul>
            </td>
        </tr>
        <?php 
            }
         
        }?>
    </table>

    <a href="logout.php"> logout </a>

</body>
</html>

<?php 
    }else{
        header('location: index.html'); 
    }
?>