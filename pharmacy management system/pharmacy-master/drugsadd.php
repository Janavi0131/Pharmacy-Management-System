<?php
   $barcode = filter_input(INPUT_POST,'barcode' );
   $name = filter_input(INPUT_POST,'name');
   $dose = filter_input(INPUT_POST,'dose');
   $trade_price = filter_input(INPUT_POST,'trade_price');
   $quantity = filter_input(INPUT_POST,'quantity');
   $no_of_sheets = filter_input(INPUT_POST,'no_of_sheets');
   $production_date = filter_input(INPUT_POST,'production_date');
   $expiry_date = filter_input(INPUT_POST,'expiry_date');
   

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
                 $sql = "INSERT INTO drugs (barcode,name,dose,trade_price,quantity,no_of_sheets,production_date,expiry_date ) values ('$barcode','$name','$dose','$trade_price','$quantity','$no_of_sheets','$production_date','$expiry_date')";
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
    <title>ADD DRUGS INFORMATION</title>
    <link rel="stylesheet" href="drugsaddstyle.css" />
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
        <h1>ADD DRUGS INFORMATION</h1>
        <form action="" method="post">
    
            <div class="txt_field">
                <input type="text" required name="barcode" />
                <span></span>
                <label for="barcode">BARCODE</label>

            </div>
            <div class="txt_field">
                <input type="text" required name="name" />
                <span></span>
                <label for="name">NAME</label>

            </div>
     
            <div class="txt_field">
                <input type="text" required name="dose" />
                <span></span>
                <label for="dose">DOSE</label>

            </div>
            <div class="txt_field">
                <input type="number" required name="trade_price" />
                <span></span>
                <label for="trade_price">TRADE_PRICE</label>

            </div>
    
            <div class="txt_field">
                <input type="number" required name="quantity" />
                <span></span>
                <label for="quantity">QUANTITY</label>
            </div>
            <div class="txt_field">
                <input type="number" required name="no_of_sheets" />
                <span></span>
                <label for="no_of_sheets">NO_OF_SHEETS</label>
            </div>
            <div class="txt_field">
                <input type="date" required name="production_date" />
                <span></span>
                <label for="production_date">PRODUCTION DATE</label>
            </div>
            <div class="txt_field">
                <input type="date" required name="expiry_date" />
                <span></span>
                <label for="expiry_date">EXPIRY DATE</label>
            </div>
            <input type="submit" name="submit" value="Submit" />
        </form>

    </div>

</body>
</html>