<?php
    session_start();

    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];
        $sql = "SELECT tu.nama, tu.email. tu.username,tu.passkey,tu.iduser FROM tbuser tu WHERE tu.username='".$user.";";
        include_once("koneksi.php");
        $hsl = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hsl);
        if($jdata > 0){
            $h = mysqli_fetch_assoc($hsl);
            $nama = $h["nama"];
            $email = $h["email"];
            $uname = $h["username"];
            $pass = $h["password"];
            $idusr = $h["iduser"];
            if($pass == $pwd){
                $_SESSION["login"] = $iduser;
                $_SESSION["user"] = $uname;
                $_ESSION["nama"] = $nama;
                $_SESSION["nama"] = $ema;
                header("location: dashboard.php");
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>

<form method="POST" action="login.php">


<h3> Login </h3>

<div>
    User name 
    <input type="text"name="txUSER">
</div>
<div>
    Password
    <input type="password"name="C">
</div>
<div>
    <button type="submit"> Login </button>
    <a href="registrasi.php">Registrasi User</a>
</div>

    </form>
</body>
</html>