<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Dashboard</title>
</head>

<body>

<h1>Admin Dashboard</h1>

<p>Welkom <?php echo $_SESSION['username']; ?></p>

<ul>

<li>
<a href="prices.php">
Prijzen aanpassen
</a>
</li>

<li>
<a href="employees.php">
Medewerkers aanpassen
</a>
</li>

<li>
<a href="contact.php">
Contact aanpassen
</a>
</li>

<li>
<a href="logout.php">
Uitloggen
</a>
</li>

</ul>

</body>
</html>