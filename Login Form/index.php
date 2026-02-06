<?php
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username"/><br>
        <label>Password</label><br>
        <input type="password" name="password"/><br>
        <input type="submit" name="submit" />
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username) || empty($password)){
            echo "Please Fill all the details";
        }else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT into userlogin (name,password) values('$username','$hash')";
            echo"{$username}"."  "."{$password}"."<br>";
            mysqli_query($conn,$sql);
            echo "Data Inserted Successfully";
        }
    }
?>


<?php
    mysqli_close($conn);
?>