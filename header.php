<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header id="header"> 
        <nav id="nav">
            <a class="nav__brand" href="#">
                <img src="img/logo.png" alt="logo">
            </a>
               <!-- Menu Open -->
            <div class="nav__icons open"><i class="ion icon-md-menu"></i></div>
                <!-- Nav List -->
            <ul class="nav__list">
                <!-- Menu Close -->
                <div class="menu__icons close"><i class="icon ion-md-close"></i></div>
                <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="index2.html" class="nav__link">Portfolio</a></li>
                <li class="nav__item"><a href="index3.html" class="nav__link">About Me</a></li>
                <li class="nav__item"><a href="index4.html" class="nav__link">Contact</a></li>
            </ul>
        </nav>
        <!-- Login -->
        <div class="form">
            <form class="login" action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/email..." >
                <input type="text" name="pwd" placeholder="Password">
                <!-- Login Button -->
                <button class="btn__login" type="submit" name="login-submit">Login</button>
            </form>
        <!-- Signup -->
        <a href="signup.php">Signup</a>
        <!-- Logout -->
            <form class="logout"  action="includes/logout.inc.php" method="post">
            <!-- Logout Button -->
            <button class="btn__logout" type="submit" name="logout-submit">Logout</button>
            </form>
        </div>   
        <!--  
        <nav>    
        <div class="header-login">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>  
        </nav>-->  
    </header>
</body>
</html>