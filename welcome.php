<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .button{
    float: right;
    background: darkslateblue;
    vertical-align: middle;
    align-self: center;
    padding: 10px 15px;
    border-radius: 5px;
    margin-right: 10px;
    border:none;
    }
    </style>
</head>
<body>
    <div>
    <h1 class="my-5">Hail, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. <br> Welcome to our site.<br></h1>
    </div>
    <a href="reset-password.php" class="button">Reset Your Password</a>
    <br>
    <a href="logout.php" class="button">Log Out</a>
</body>
</html>