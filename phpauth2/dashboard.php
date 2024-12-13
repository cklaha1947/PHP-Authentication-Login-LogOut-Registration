<?php 
session_start();
if (!isset($_SESSION['un'])) {
    header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <label style="color:red"><?php echo $_SESSION['un']; ?></label>  to the DashBoard Page.</h1>
    <a href="logout.php">Logout</a>
</body>
</html>