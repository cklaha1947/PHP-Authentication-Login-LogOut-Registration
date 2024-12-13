<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php auth</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="registration.php" method="POST">  
        <p>Name</p>
        <p><input type="text" name="name"></p>
        <p>Email</p>
        <p><input type="email" name="email" ></p>
        <p>Password</p>
        <p><input type="password" name="pass"></p>
        <p><input type="submit" name="reg" value="Register"></p>
    </form>
</body>
</html>