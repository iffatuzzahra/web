<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba Soal UTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div>
            <form action="uts.php">
                <label>Masukkan : </label>
                <input type="text" name="inp"> <br>
            </form>
        </div>
    <h1>Coba Soal UTS</h1>
    <table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Harga</th>
            
        </tr>
        <?php
            $inp=$_GET['inp'];

             $host="localhost";
             $user="root";
             $password="";
             $database="ok";
             $link= mysqli_connect ($host, $user, $password, $database);
                ##id, nama produk, kategori, nama suplier, harga
             $sql="SELECT products.ProductID, products.ProductName, categories.CategoryName, suppliers.CompanyName, products.UnitPrice FROM  products, categories, suppliers WHERE products.ProductName LIKE '$inp%' AND categories.CategoryID=products.CategoryID AND suppliers.SupplierID=products.SupplierID  ";
             $query= mysqli_query($link,$sql);
     
             while( $row=mysqli_fetch_object($query)) 
             {
                 echo "<tr>";
                     echo "<td>$row->ProductID </td>";
                     echo "<td>$row->ProductName </td>";
                     echo "<td>$row->CategoryName </td>";
                     echo "<td>$row->CompanyName </td>";
                     echo "<td>$row->UnitPrice </td>";
                 echo "</tr>";
             }

        ?>
    </table>
    </div>
</body>
</html>