<?php 
    session_start();
    
        $email = $_REQUEST['email']; 
        $password = $_REQUEST['password']; 
        $flag = false;
        if($email == "" && $password == "") {
            echo "Null value ..";
        }else{
            $file = fopen('traveller.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if($email == trim($user[2]) && $password == trim($user[1])){
                    $flag = true; 
                }
            }

            if($flag){
                setcookie('flag', 'abc', time()+300, '/');
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                header('location: tDashboard.php');
                $flag = false; 
            }else{
                header('location: travellerLogin.php?msg=error');
            }
        }
   
?>