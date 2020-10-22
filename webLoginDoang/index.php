<!DOCTYPE html>
<style>
    html,body {
        background-image: url('https://static.vecteezy.com/system/resources/previews/000/518/866/non_2x/vector-colorful-abstract-and-violet-background-banner-and-wallpaper.jpg');
        background-size: 100%;
        margin: none;
    }
    form {
        background-color:darkgray;
        box-sizing:content-box;
        width:min-content ;
        margin: 80px auto;
        padding: 30px 40px;
        font-size: large;
        white-space: pre-line;
    }
    .tombol {
        background-color:royalblue;
        border: none;
        color: white;
        font-size : large;
    }
    button:hover {
        opacity: 0.8;
    }
</style>
<html >
<head>
    <title>Log In</title>
</head>
<body>
    <?php
    if (!empty($_GET['message'])) {
        ?>
        <script>
        alert("<?=$_GET['message']?>");
        </script> 
        <?php
    }
    ?>
    <div>
        <form action="proses.php" method="post">
            <label>Email : </label>
            <input type="text" name="email" placeholder="masukkan email"><br>
            <label>Password : </label>
            <input type="password" name="password" placeholder="masukkan password"><br>
            <center><br><input class="tombol" type="submit" name="proses" value="Masuk">
            </center>
        </form>
        <center>
            <label>Belum punya akun? Daftar disini!</label>
            <br><a href="daftar.php"><button class="tombol" type="submit" name="daftar">Daftar</button></a>
        </center>
    </div>
</body>
</html>