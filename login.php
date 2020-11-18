<?php
//start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <style>

    </style>
</head>
<body>
<?php
// Set session variables
if(isset($_GET["email"]) && isset($_GET["password"])){
    $_SESSION["email"] = $_GET["email"];
    $_SESSION["password"] = $_GET["password"];

}

if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
    print "You Have Logged In!";
} else {
?>

<form action="login.php" method="get">
    <div>LOGIN please</div>
    <input name="email" placeholder="please input your email">
    <input type="password" name="password" placeholder="password here please">
    <input type="submit" name="go">
</form>
<?php
}
?>
</body>
</html>