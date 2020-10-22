<!DOCTYPE html>
<style>
    html,body {
        background-image: url('https://static.vecteezy.com/system/resources/previews/000/518/866/non_2x/vector-colorful-abstract-and-violet-background-banner-and-wallpaper.jpg');
        background-size: 100%;
        margin: none;
    }
    div {
        background-color:darkgray;
        box-sizing:content-box;
        width:max-content ;
        margin: 80px auto;
        padding: 30px 40px;
        font-size: xx-large;
    }
    .tombol {
        background-color:royalblue;
        border: none;
        color: white;
        font-size : large;
        width : 180px;
    }
    button:hover {
        opacity: 0.8;
    }
</style>

<html>
<head>
    <title>Result</title>
</head>
<body>
    <div>
    <?php

    $email=$_POST['email'];
    $userpassword=$_POST['password'];

    include "koneksi.php";

    $sql="select * from user";
    $query= mysqli_query($konek,$sql);
   
    $cekbenar=true; 
    
    while( $row= mysqli_fetch_object($query)) {
        if (($email==$row->email)&&($userpassword==$row->password)) {
            $cekbenar=false;
            echo "Selamat Datang $row->nama"; 
            ?>
            <form action="hapus.php" method="post">
                <input type="hidden" name="email"><br>
                <center><br><input class="tombol" type="submit" name="hapus" value="Hapus Akun">
                </center>
            </form>
            <?php

        }
        elseif (($email==$row->email)&&($cekbenar)) {
            $cekbenar=false;
            echo "Password Anda Salah";
            
        }
       
    }
    if ($cekbenar) echo "Login Gagal";
    ?>
        <center>
        <a href="index.php"><br><button class="tombol" type="submit" name="kembali">Kembali</button></a>
        </center>

    </div>
</body>
</html>

