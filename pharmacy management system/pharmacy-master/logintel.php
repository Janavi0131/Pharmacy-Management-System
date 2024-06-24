<?php
   $email = filter_input(INPUT_POST,'email');
   $password = filter_input(INPUT_POST,'password');

   if(!empty($email)){
      if(!empty($password)){
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "pharmacy_management_new";

          $conn = new mysqli($host, $dbusername, $dbpassword, $dbname );
          if(mysqli_connect_error()){
              die('Connect Error ('.mysqli_connect_errno().')' . mysqli_connect_error());
          }
          else {
                if($email === 'devan345@gmail.com'&& $password === '9M123'){
                    header('Location: login_table1b9.php');
                }
                elseif($email === 'yamini@gmail.com' && $password === '10M123'){
                    header('Location: login_table1b10.php');
                }
                
                    
                
                elseif($email === 'sitara890@gmail.com'&& $password === '9P123'){
                    header('Location: login_tabled9.php');
                }
                elseif($email === 'amruth@gmail.com' && $password === '10P123'){
                    header('Location: login_tabled10.php');
                }
                
                 
                 
                if(($password === '9M123'&&$email === 'devan345@gmail.com') || ($password === '10M123'&&$email === 'yamini@gmail.com')
                 ||($password === '9P123' && $email === 'sitara890@gmail.com')|| ($password ==='10P123' && $email === 'amruth@gmail.com'))
                 {
                    echo "Login Successful";
                 }
                 else{
                    echo "ERROR: INCORRECT EMAIL OR PASSWORD" . $conn->error;
                 }
                 $conn->close();
          }
      }
      else{
        echo "Password should not be empty";
        die();
      }
   }
   else {
    echo "Email should not be empty";
    die();
   }
?>
