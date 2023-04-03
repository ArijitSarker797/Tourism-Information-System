<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email']; 
        $number = $_REQUEST['number'];
        $dob = $_REQUEST['dob'];
        $img = $_REQUEST['img'];
        // $usertype = $_REQUEST['usertype']; 

        if($username == "" && $password == "" && $email == "" && $number == "" && $dob == "" && $img == "" && $usertype == "") {
            echo "Null value ..";
        }else if(strlen($password<8)){echo "password should be 8 or more characters long";}
    else{
        echo "invalid request...";
    }
         $file = fopen('traveller.txt', 'a');
         $user = $username."|".$password."|".$email."|".$number. "|".$dob.  "|".$img."\r\n";
         fwrite($file, $user);
         header('location: travellerLogin.php');
    // if($usertype =="$usertype[0]"){
    //     $file = fopen('traveller.txt', 'a');
    //     $user = $username."|".$password."|".$email."|".$number. "|".$dob.  "|".$img."\r\n";
    //     fwrite($file, $user);
    //     header('location: travellerLogin.php');
    // }else if($usertype =="$usertype[1]"){
    //     $file = fopen('guide.txt', 'a');
    //     $user = $username."|".$password."|".$email."|".$number. "|".$dob.  "|".$img."\r\n";
    //     fwrite($file, $user);
    //     header('location: guideLogin.php');
    // }
    }
?>