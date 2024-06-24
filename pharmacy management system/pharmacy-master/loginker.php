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
                if($email === 'karan56@gmail.com'&&$password === '3M123'){
                    header('Location: login_table1b3.php');
                }
                elseif($email === 'yagna@gmail.com'&& $password === '4M123'){
                    header('Location: login_table1b4.php');
                }
                
                    
                
                elseif( $email === 'amar67@gmail.com'&& $password === '3P123'){
                    header('Location: login_tabled3.php');
                }
                elseif($email === 'yukthi@gmail.com'&& $password === '4P123'){
                    header('Location: login_tabled4.php');
                }
                
                 
                 
                if(($password === '3M123'&&$email === 'karan56@gmail.com') || ($password === '4M123'&&$email === 'yagna@gmail.com')
                 ||($password === '3P123' && $email === 'amar67@gmail.com')|| ($password ==='4P123' && $email === 'yukthi@gmail.com'))
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
