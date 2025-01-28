<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-client area</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="form">
        <?php echo $_SESSION["name"];?></p>
        <p> you are in user dashboard</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>