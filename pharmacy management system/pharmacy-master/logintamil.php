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
                if($email === 'agastya90@gmail.com'&& $password === '5M123'){
                    header('Location: login_table1b5.php');
                }
                elseif($email === 'hemashree@gmail.com'&& $password === '6M123'){
                    header('Location: login_table1b6.php');
                }
                
                    
                
                elseif($email === 'anya123@gmail.com'&& $password === '5P123'){
                    header('Location: login_tabled5.php');
                }
                elseif($email === 'rishi@gmail.com'&& $password === '6P123'){
                    header('Location: login_tabled6.php');
                }
                
                 
                 
                if(($password === '5M123'&&$email === 'agastya90@gmail.com') || ($password === '6M123'&&$email === 'hemashree@gmail.com')
                 ||($password === '5P123' && $email === 'anya123@gmail.com')|| ($password ==='6P123' && $email === 'rishi@gmail.com'))
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
