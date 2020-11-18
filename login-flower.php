<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN flower shop</title>
</head>
<body>
<?php
// Set session variable
if(isset($_GET["email"]) && isset($_GET["password"])){
    $_SESSION["email"] = $_GET["email"];
}
?>




</body>
</html>