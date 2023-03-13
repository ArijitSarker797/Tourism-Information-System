<?php 
    session_start();
?>

<html>
    <head>
        <title>Sign Up</title>
    </head>

    <body>
        <form method="POST" action="regCheck.php" enctype="">
            <div align="center">
            <fieldset style="width: 400px;height: 200px;">
            <legend>Registration</legend>
                Username: <input type="text" name="username" value=""/> <br>
                Password: <input type="password" name="password" value=""/> <br> 
                Email: <input type="email" name="email" value=""/> <br> 
                Phone: <input type="number" name="number" value=""> <br>
                Gender:<input type="radio" name="gender" value=""/> Male
                       <input type="radio" name="gender" value=""/> Female
                       <input type="radio" name="gender" value=""/> other <br>
                DOB:   <input type="date" name="dob" value="" /> <br> 
                Profile Photo:<input type="file" name="img" value="" /> <br> 
                User Type: <input type="radio" name="usertype" value="">Traveller
                           <input type="radio" name="usertype" value="">Guide
                <br>     
                <input type="submit" name="submit" value="Submit"/>
                <input type="button" name="" value="Reset" />
            </fieldset>
            </div>
        </form>

    </body>
</html>