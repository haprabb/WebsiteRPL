<?php 
session_start();
if(!isset($_SESSION['session_username'])){
    header("location:login.php");
    exit();
}

if(isset($_POST['logout'])){
    // Hapus semua session
    session_unset();
    session_destroy();
    
    // Hapus semua cookie
    setcookie("cookie_username", "", time() - 3600, "/");
    setcookie("cookie_password", "", time() - 3600, "/");
    
    // Redirect ke halaman login
    header("location:login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container my-4">
    <h1>Selamat datang di Halaman Admin</h1>
    <form method="post">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
    <hr>
    <pre><?php print_r($_SESSION); ?></pre>
    <pre><?php print_r($_COOKIE); ?></pre>
</div>
</body>
</html>
