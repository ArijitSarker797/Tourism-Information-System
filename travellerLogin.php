<?php 
    session_start();
    
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == "error"){
            echo "Invalid user/password, please register first!";
        }else{
            header('location: index.html');
        }
    }
?>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <form method="POST" action="travellerLoginCheck.php" enctype="">
            <div align="center">
            <fieldset style="width: 400px;height: 200px;">
                <legend>Traveller Login</legend>
                Username: <input type="text" name="username" value=""/> <br>
                Password: <input type="password" name="password" value=""/> <br> 
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
            </div>
        </form>

    </body>
</html>