<?php
include '../db.php';
setcookie("outcum","right");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email='$email' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    session_start();
    if ($user != null) {
        $_SESSION["loggedin"]=true;
        $_SESSION["user_id"]=$user['id'];
        echo $_SESSION['user_id'];
         header('location:../index.php');
    } else {
        setcookie("outcum","wrong");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../shared.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="backdrop"></div>
    <header class="main-header">
        <div class="main-div__item">
            <button class="toggle-button">
                <span class="toggle-button__bar"></span>
                <span class="toggle-button__bar"></span>
                <span class="toggle-button__bar"></span>
            </button>
            <a href="../index.php" class="main-header__brand">AuctonX</a>
        </div>
        <nav class="main-nave">
            <ul class="main-nave__items">
                <li class="main-nave__item">
                    <a href="../profile/profile.php">Profile</a>
                </li>
                <li class="main-nave__item">
                    <a href="Aboutus.php">About us</a>
                </li>
                <li class="main-nave__item">
                    <a href="">Contact us</a>
                </li>
                <li class="main-nave__item main-nave--cta">
                    <a href="../LiveAuction/liveauction.php">Live auction</a>
                </li>
            </ul>
        </nav>
    </header>
    <nav class="mobile-nav">
        <ul class="mobile-nav__items">
            <li class="main-nave__item">
                <a href="Bid.php">Bid</a>
            </li>
            <li class="main-nave__item">
                <a href="Aboutus.php">About us</a>
            </li>
            <li class="main-nave__item">
                <a href="">Contact us</a>
            </li>
            <li class="main-nave__item main-nave--cta">
                <a href="liveauction.php">Live auction</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="box">
            <h1>AuctonXp</h1>
            <div class="inner-box">
                <div class="comon-box left">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit molestiae facere itaque. Rerum iste,
                        molestias dolores consectetur culpa placeat illum praesentium nulla necess.</p>
                    <p>Don't have an account?</p>
                    <a class="sintup-button" href="../Singup/singup.php">Signup</a>
                </div>
                <div class="comon-box right">
                    <form method="post">
                        <h3>Login</h3>
                        <p id="lable"></p>
                        <div class="form-group">
                            <label for="email"><b>Enter Your Email</b></label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><b>Enter Your Password</b></label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="login"><button class="button" type="submit" name="submit" id="login"> Login</button></div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="../shared.js"></script>
    <script src="login.js"></script>
</body>

</html>