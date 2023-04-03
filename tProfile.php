<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
    <head>

    </head>
    <body>
    <h1>welcome <?=$_SESSION['email']?>!</h1>
    <table border="1" align="center"height="600px" width="600px">
        <tr>
            <td colspan="2" align="center"> Profile</td>
        </tr>
        <?php 
            $file = fopen('traveller.txt', 'r');
            

            while(!feof($file)){
                $data = fgets($file);
                $user = explode(';', $data);
                $user_count=count($user);
                $user_single = explode('|', $user[0]);
                $emailX=trim(@$user_single[2]);
                if($emailX == $_SESSION['email']){
        ?>
        <tr>
            <td>
                <ul>Name:<?=$user_single[0]?></ul>
                <ul>Password:<?=$user_single[1]?></ul>
                <ul>Email:<?=$user_single[2]?></ul>
                <ul>Phone:<?=$user_single[3]?></ul>
                <ul>Date of Birth:<?=$user_single[4]?></ul>
            </td>
            <td>
                <ul><img src="images/<?=$user_single[5]?>" alt="" height="200px" width="140px" align="center"></ul>
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