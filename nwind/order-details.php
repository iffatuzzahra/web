<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Produk dalam Order Ini</h1>
    <table class="table">
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Product</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity </th>
            <th scope="col">Discount </th>
        </tr>
        <?php
             $oid=$_GET['oid'];
             $host="localhost";
             $user="root";
             $password="";
             $database="ok";
             $link= mysqli_connect ($host, $user, $password, $database);
     
             $sql="select * from orderdetails where OrderID='$oid' ";
             $query= mysqli_query($link,$sql);
     
             while( $row=mysqli_fetch_object($query)) 
             {
                 echo "<tr>";
                    echo "<td>$row->OrderID</td>";
                    echo "<td>$row->ProductID</td>";
                    echo "<td>$row->UnitPrice </td>";
                    echo "<td>$row->Quantity  </td>";
                    echo "<td>$row->Discount </td>";
                 echo "</tr>";
             }

        ?>
    </table>
    </div>
</body>
</html>