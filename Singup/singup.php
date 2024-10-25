<?php
    include '../db.php';
    if(isset($_POST['submit'])){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT INTO user(full_name,email,pass) values('$fullname','$email','$password')";
        $result=mysqli_query($conn,$sql);
        if ($result) {
            header('location:../index.php');
          } else {
            mysqli_error($conn);
          }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../shared.css">
    <title>Signup Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="singup.css">
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
                    <a href="profile.php">Profile</a>
                </li>
                <li class="main-nave__item">
                    <a href="Apoutus.php">About us</a>
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
                <a href="profile.php">Profile</a>
            </li>
            <li class="main-nave__item">
                <a href="Apoutus.php">About us</a>
            </li>
            <li class="main-nave__item">
                <a href="">Contact us</a>
            </li>
            <li class="main-nave__item main-nave--cta">
                <a href="../LiveAuction/liveauction.php">Live auction</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="signup-form">
              <h2>Sign up</h2>
              <div class="login-link">
                Have an account? <a href="../Login/login.php"><b>Login here</b></a>
              </div>
              <form class="form" method="post">
                <div class="form-group">
                  <label for="fullname"><b>Enter Your Full Name</b></label>
                  <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" required>
                </div>
                <div class="form-group">
                  <label for="email"><b>Enter Your Email</b></label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="password"><b>Enter Your Password</b></label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="terms-checkbox" required>
                  <label class="form-check-label" for="terms-checkbox">I agree with the <b>Terms & Policy</b></label>
                </div>
               <button href="../Login/login.php" type="submit" class="btn-primary" name="submit" >Create Account</button>
                
              </form>
        
            </div>
          </div>
    </main>


   
</body>

</html>