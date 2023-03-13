<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email']; 
        $number = $_REQUEST['number'];
        $dob = $_REQUEST['dob'];
        $img = $_REQUEST['img'];
        $usertype = $_REQUEST['usertype']; 

        if($username == "" && $password == "" && $email == "" && $number == "" && $dob == "" && $img == "" && $usertype == "") {
            echo "Null value ..";
        }else if($usertype =="$usertype[0]"){
            $file = fopen('traveller.txt', 'a');
            $user = $username."|".$password."|".$email."|".$number. "|".$dob. "|".$number. "|".$img."\r\n";
            fwrite($file, $user);
            header('location: travellerLogin.php');
        }else if($usertype =="$usertype[1]"){
            $file = fopen('guide.txt', 'a');
            $user = $username."|".$password."|".$email."|".$number. "|".$dob. "|".$number. "|".$img."\r\n";
            fwrite($file, $user);
            header('location: guideLogin.php');
        }
    }else{
        echo "invalid request...";
    }
?>