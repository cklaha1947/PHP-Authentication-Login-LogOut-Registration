<?php 
$con=mysqli_connect("localhost","root","","myauthphp");
if (isset($_POST['reg'])) {
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=md5($_POST['pass']);

    $ins="INSERT INTO users SET name='$n',email='$e',password='$p'";
    if ($con->query($ins)) {
        header("location:login.php");
    }
}




?>