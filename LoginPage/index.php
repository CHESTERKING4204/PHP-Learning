<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action ="index.php">
        <label>UserName:</label>
        <input type="text" name="username"/>
        <label>Password:</label>
        <input type="password" name="password" />
        <input type="submit" name="Login" />
    </form>
</body>
</html>
<?php 
    if((isset($_POST['Login']))){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username) && !empty($password)){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: home.php");
        }
    }
?>