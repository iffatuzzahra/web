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
    <h1>Daftar Costumer</h1>
    <table class="table">
        <tr>
            <th scope="col">Customer ID</th>
            <th scope="col">Company name</th>
            <th scope="col">Contact Name</th>
            <th scope="col"> </th>
        </tr>
        <?php
             $host="localhost";
             $user="root";
             $password="";
             $database="ok";
             $link= mysqli_connect ($host, $user, $password, $database);
     
             $sql="select * from customers";
             $query= mysqli_query($link,$sql);
     
             while( $row=mysqli_fetch_object($query)) 
             {
                 echo "<tr>";
                     echo "<td>$row->CustomerID </td>";
                     echo "<td>$row->CompanyName </td>";
                     echo "<td>$row->ContactName </td>";
                     ?>
                        <td><a href="orders.php?cid=<?php echo ($row->CustomerID) ?>" ><button class="btn btn-primary">Lihat Order</button></a></td>
                     <?php
                 echo "</tr>";
             }

        ?>
    </table>
    </div>
</body>
</html>