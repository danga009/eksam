<?php
require_once "database.php";

if(isset($_POST["login"])) {
    $username = $_POST["user"];
    $password = $_POST["pass"];
    if($username=="admin" && $password== "admin"){
        echo "<script type='text/javascript'>alert('Login Success')</script>";       
    }else{
        echo "<script type='text/javascript'>alert('Login Error')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login Form</h1>

<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="user" placeholder="Run" ></td>  
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="pass" ></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="login" value="Login" ></td>
    </tr>
</table>

</body>
</html>