<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/22/54/d1/2254d1bb0d6c084c65611d6dbdf8ba1d.jpg');
        }
</style>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="index.php">Logout</a></p>
    </div>
</body>
</html>