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
    <h1>Hello This is the Login Page</h1>
    <form action="home.php" method="post">
        <input type="submit" name="Logout" value="Logout" />
    </form>
</body>
</html>
<?php 
    echo $_Session['username'] . "<br>";
    echo $_Session['password'] . "<br>";
    if(isset(($_POST['Logout']))){
        session_destroy();
        header("Location: index.php");
    }

?>
