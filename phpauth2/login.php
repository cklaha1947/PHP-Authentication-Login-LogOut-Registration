<?php 
session_start();
$con=mysqli_connect("localhost","root","","myauthphp");
if (isset($_POST['login'])) {
    $e=$_POST['email'];
    $p=md5($_POST['pass']);

    $sel="SELECT * FROM users WHERE email='$e' AND password='$p'";
    $rs=$con->query($sel);
    if ($rs->num_rows>0) {
    $row=$rs->fetch_assoc();
    $_SESSION['un']=$row['name'];
    header("location:dashboard.php");
    } else {
        echo "Invalid Login";
    }
    
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
    <h1>Login Page</h1>
    <form action="" method="POST">
        <p>Email</p>
        <p><input type="text" name="email" ></p>
        <p>Password</p>
        <p><input type="password" name="pass" ></p>
        <p><input type="submit" value="Login" name="login"></p>
    </form>
</body>
</html>