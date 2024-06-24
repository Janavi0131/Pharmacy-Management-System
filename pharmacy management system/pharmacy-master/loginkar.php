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
                if($password === '1M123'&&$email === 'ishaan24@gmail.com'){
                    header('Location: login_table1b1.php');
                }
                elseif($password === '2M123'&&$email === 'akash@gmail.com'){
                    header('Location: login_table1b2.php');
                }
                
                    
                
                elseif($password === '1P123'&& $email === 'jai23@gmail.com'){
                    header('Location: login_tabled1.php');
                }
                elseif($password === '2P123'&& $email === 'aman@gmail.com'){
                    header('Location: login_tabled2.php');
                }
                
                 
                 
                if(($password === '1M123'&&$email === 'ishaan24@gmail.com') || ($password === '2M123'&&$email === 'akash@gmail.com')
                 ||($password === '1P123' && $email === 'jai23@gmail.com')|| ($password ==='2P123' && $email === 'aman@gmail.com'))
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
