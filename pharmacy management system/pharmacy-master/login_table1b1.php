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
    <h1>Information of Customers (BRANCH-1 [KENGERI, KARNATAKA])</h1>
    <br>
    <table class="content-table">
        <thead>
            <tr>
                 <th>CID</th>
                 <th>CUSTOMER_NAME</th>
                 <th>CUSTOMER_PHONE</th>
                 <th>BILL_DATE</th>
                 <th>AMOUNT</th>
                 <th>BID</th>
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

            $sql = "SELECT * FROM customer WHERE BID = 1";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query:" . $connection->connect_error);
            }

            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>" . $row["CID"] ."</td>
                <td>" . $row["CUSTOMER_NAME"] ."</td>
                <td>" . $row["CUSTOMER_PHONE"] ."</td>
                <td>" . $row["BILL_DATE"] ."</td>
                <td>" . $row["AMOUNT"] ."</td>
                <td>" . $row["BID"] ."</td>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Click here to <a href= "customeradd.php">ADD CUSTOMER INFORMATION</a>
</body>
</html>