<?php
session_start();
include '../config/db.php';

if(isset($_SESSION['admin'])){
    header("Location: dashboard.php");
    exit;
}

if(isset($_POST['login'])){

    $user = trim($_POST['user']);
    $pass = trim($_POST['pass']);

    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row && $pass === $row['password']){

        $_SESSION['admin'] = true;
        $_SESSION['username'] = $row['username'];

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Verkeerde gebruikersnaam of wachtwoord";

    }
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

.login-box{
    width:400px;
    margin:100px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.15);
}

input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:12px;
}

.error{
    color:red;
    margin-bottom:15px;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<?php
if(isset($error)){
    echo "<div class='error'>$error</div>";
}
?>

<form method="POST">

<input
type="text"
name="user"
placeholder="Gebruikersnaam"
required>

<input
type="password"
name="pass"
placeholder="Wachtwoord"
required>

<button type="submit" name="login">
Inloggen
</button>

</form>

</div>

</body>
</html>