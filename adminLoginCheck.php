<?php 
    session_start();
    
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $flag = false;
        if($email == "" && $password == "") {
            echo "Null value ..";
        }else{
            $file = fopen('tour.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if($email == trim($user[2]) && $password == trim($user[1])){
                    $flag = true; 
                }
            }

            if($flag){
                setcookie('flag', 'abc', time()+600, '/');
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                header('location: home.php');
                $flag = false; 
            }else{
                header('location: adminLogin.php?msg=error');
            }

           
        }
    
?>