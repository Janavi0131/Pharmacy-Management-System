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
                if($email === 'tamia789@gmail.com' && $password === '7M123'){
                    header('Location: login_table1b7.php');
                }
                elseif($email === 'divya@gmail.com'&& $password === '8M123'){
                    header('Location: login_table1b8.php');
                }
                
                    
                
                elseif($email === 'shaan59@gmail.com'&& $password === '7P123'){
                    header('Location: login_tabled7.php');
                }
                elseif($email === 'esha@gmail.com'&& $password === '8P123'){
                    header('Location: login_tabled8.php');
                }
                
                 
                 
                if(($password === '7M123'&&$email === 'tamia789@gmail.com') || ($password === '8M123'&&$email === 'divya@gmail.com')
                 ||($password === '7P123' && $email === 'shaan59@gmail.com')|| ($password ==='8P123' && $email === 'esha@gmail.com'))
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
