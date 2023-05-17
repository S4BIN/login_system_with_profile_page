<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./style.css">
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
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="login-button">LOGIN</a></li>
            </ul>
        </nav>
    </header>

    <section class="index-intro">
        <div class="index-intro-bg">
            <div class="wrapper">
                <div class="index-intro-c1">
                    <div class="video"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis du</p>
                </div>
                <div class="index-intro-c2">
                    <h2>We make<br>professional<br>gear</h2>
                    <a href="#">FIND OUR GEAR HERE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here! </p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Don't have an account up here</p>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username">
                        <input type="password" name="pwd" placeholder="Password">
                        <br>
                        <button type="submit" name="submit">LOGIN</button>
                    </form>
            </div>
        </div>
    </section>
</body>
</html>