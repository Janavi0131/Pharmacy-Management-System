<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_tablestyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

<body style="margin: 50px;">
    <h1>Information on Receied Drugs (BRANCH-3 [PADMANABHANAGAR, KERALA] )</h1>
    <br>
    <table class="content-table">
        <thead>
            <tr>
                 <th>BID</th>
                 <th>BARCODE</th>
                 <th>R_DATE</th>
                 <th>B_ADDRESS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $css = file_get_contents('login_tablestyle.css');
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "pharmacy_management_new";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("Connection failed:" . $connection->connect_error);
            }

            $sql = "SELECT * FROM received WHERE BID = 3";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query:" . $connection->connect_error);
            }

            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>" . $row["BID"] ."</td>
                <td>" . $row["BARCODE"] ."</td>
                <td>" . $row["R_DATE"] ."</td>
                <td>" . $row["B_ADDRESS"] ."</td>
                <td>
    
                </td>
                </tr>";
            }
           
            ?>
            
    <br>
    <table class="content-table">
        <thead>
            <tr>
                 <th>BARCODE</th>
                 <th>NAME</th>
                 <th>DOSE</th>
                 <th>TRADE_PRICE</th>
                 <th>QUANTITY</th>
                 <th>NO_OF_SHEETS</th>
                 <th>PRODUCTIO_DATE</th>
                 <th>EXPIRY_DATE</th>
                 <th>D_ADDRESS</th>
                 
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "pharmacy_management_new";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("Connection failed:" . $connection->connect_error);
            }

            $sql = "SELECT * FROM drugs";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query:" . $connection->connect_error);
            }

            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>" . $row["BARCODE"] ."</td>
                <td>" . $row["D_NAME"] ."</td>
                <td>" . $row["DOSE"] ."</td>
                <td>" . $row["TRADE_PRICE"] ."</td>
                <td>" . $row["QUANTITY"] ."</td>
                <td>" . $row["NO_OF_SHEETS"] ."</td>
                <td>" . $row["PRODUCTION_DATE"] ."</td>
                <td>" . $row["EXPIRY_DATE"] ."</td>
                <td>" . $row["D_ADDRESS"] ."</td>
                <td>
    
                </td>
                </tr>";
            }
           
            ?>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Click here to <a href= "logout.php">LOGOUT</a>
</body>
</html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Click here to <a href= "drugsadd.php">ADD DRUGS INFORMATION</a>
</body>
</html>