<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
</head>
<body>
    <header>
        <nav>
            <div>
                <h3>LOGO/NAME</h3>
                <ul class="menu-main">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">SALES</a></li>
                    <li><a href="#">MEMBERS</a></li>
                </ul>
            </div>
            <ul class="menu-member">
                <?php
                if(isset($_SESSION["userid"])) {
                ?>
                    <li><a href="profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                    <li><a href="includes/logout.inc.php" class="login-button">LOGOUT</a></li>
                <?php
                    }
                    else {
                ?>
                    <li><a href="#">SIGN UP</a></li>
                    <li><a href="#" class="login-button">LOGIN</a></li>
                <?php
                    }
                ?>    
            </ul>
        </nav>
    </header>