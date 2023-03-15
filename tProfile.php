 <table border="1" align="center"height="600px" width="600px">
        <tr>
            <td colspan="2" align="center"> Profile</td>
        </tr>
        <?php 
            $file = fopen('traveller.txt', 'r');
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