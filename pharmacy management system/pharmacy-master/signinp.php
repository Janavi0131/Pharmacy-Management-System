<?php
   $name = filter_input(INPUT_POST,'name' );
   $phone = filter_input(INPUT_POST,'phone');
   $email = filter_input(INPUT_POST,'email');
   $dob = filter_input(INPUT_POST,'dob');
   $address = filter_input(INPUT_POST,'address');
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
                 $sql = "INSERT INTO employee ( name, phone, email, dob, address, password) values ('$name','$phone','$email','$dob','$address', '$password')";
                 if($conn->query($sql)){
                    echo "New record is inserted";
                 }
                 else{
                    echo "Error:" . $sql . "<br>" . $conn->error;
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
    echo "Email shoul not be empty";
    die();
   }
?>