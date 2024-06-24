<?php
   $customer_name = filter_input(INPUT_POST,'customer_name' );
   $customer_phone = filter_input(INPUT_POST,'customer_phone');
   $bill_date = filter_input(INPUT_POST,'bill_date');
   $amount = filter_input(INPUT_POST,'amount');
   $bid = filter_input(INPUT_POST,'bid');

   if(isset($_POST['submit'])){
      
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "pharmacy_management_new";

          $conn = new mysqli($host, $dbusername, $dbpassword, $dbname );
          if(mysqli_connect_error()){
              die('Connect Error ('.mysqli_connect_errno().')' . mysqli_connect_error());
          }
          else {
                 $sql = "INSERT INTO customer ( customer_name, customer_phone, bill_date, amount, bid) values ('$customer_name','$customer_phone','$bill_date','$amount', '$bid')";
                 if($conn->query($sql)){
                    $string = "New record is inserted";
                    //echo $string."<br>";
                    //echo '<span style="font-size: 20px;">' . $string . '<a href="customeradd.php"></a></span>';
                    echo '<span style="color: white;">' . $string ;
                 }
                 else{
                    echo "Error:" . $sql . "<br>" . $conn->error;
                 }
                 $conn->close();
          }
      }
      
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>ADD CUSTOMER INFORMATION</title>
    <link rel="stylesheet" href="customeraddstyle.css" />
</head>
<body>
    <nav>
        <div class="nav-links">
            <ul>
                <li><a href="login.html">BACK</a></li>
            </ul>
        </div>
    </nav>
    <div class="center">
        <h1>Add Customer</h1>
        <form action="" method="post">
    
            <div class="txt_field">
                <input type="text" required name="customer_name" />
                <span></span>
                <label for="customer_name">NAME</label>

            </div>
            <div class="txt_field">
                <input type="number" required name="customer_phone" />
                <span></span>
                <label for="customer_phone">PHONE</label>

            </div>
     
            <div class="txt_field">
                <input type="date" required name="bill_date" />
                <span></span>
                <label for="bill_date">BILL DATE</label>

            </div>
            <div class="txt_field">
                <input type="number" required name="amount" />
                <span></span>
                <label for="amount">AMOUNT</label>

            </div>
    
            <div class="txt_field">
                <input type="number" required name="bid" />
                <span></span>
                <label for="bid">BID</label>
            </div>
            <input type="submit" name="submit" value="Submit" />
        </form>

    </div>

</body>
</html>