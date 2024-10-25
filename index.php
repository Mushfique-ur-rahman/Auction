<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo $_SESSION['user_id'];
}

include 'db.php';
$sql = "SELECT * FROM `product`";
$result = mysqli_query($conn, $sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="main1.css">
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
            <a href="index.php" class="main-header__brand">AuctonX</a>
        </div>
        <nav class="main-nave">
            <ul class="main-nave__items">
                <li class="main-nave__item">
                    <a href="profile/profile.php">Profile</a>
                </li>
                <li class="main-nave__item">
                    <a href="Apoutus.php">About us</a>
                </li>
                <li class="main-nave__item">
                    <a href="">Contact us</a>
                </li>
                <li class="main-nave__item main-nave--cta">
                    <a href="LiveAuction/liveauction.php">Live auction</a>
                </li>
                <li class="main-nave__item main-nave--cta">
                    <a href="Login/login.php">Login or Singup</a>
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
                <a href="Apoutus.php">About us</a>
            </li>
            <li class="main-nave__item">
                <a href="">Contact us</a>
            </li>
            <li class="main-nave__item main-nave--cta">
                <a href="liveauction.php">Live auction</a>
            </li>
            <li class="main-nave__item main-nave--cta">
                <a href="Login/login.php">Login or Singup</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="intro">
            <div class="intro_section">
                <h1>Lorem ipsum is simply a dummyn text of the printing</h1>
                <p>Lorem ipsum dolor sit text</p>
                <button class="button">Browse latest</button>
            </div>
            <div class="intro_section"><img src="img/download.jfif" alt=""></div>
        </div>
        <h1 class="h1_live">Live Auction</h1>
        <div class="Auction_prevew">
            <div class="Auction_list">
            <?php 
            $i=0;
            while($i<4 && $resorc = mysqli_fetch_assoc($result)){ 
                $id=$resorc["product_id"];
                ?>

                <div class="card">
                    <img src="../<?php echo $resorc['img_dir'] ?>">
                    <h3><?php echo $resorc['product_name']?></h3>
                  <button class="button"><a  href="Auctiondetails/details.php?<?php echo "id=$id"?>" style="text-decoration: none;">Bid on it</a></button>  
                </div>
              <?php $i++; } ?>
        </div>
        <div class="nex">
                <a href="LiveAuction/liveauction.php"> <img class="aro" src="img/istockphoto-1331290751-612x612.jpg" alt=""></a>
            </div>
        <div class="Aboutus-box">
            <h1>About us</h1>
            <div class="Aboutus">
                <div class="about-info">
                    <h1>Who We Are</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil delectus suscipit fugiat quis?
                        Ipsa, sapiente delectus pariatur necessitatibus quas quasi corrupti. Aut vero eligendi quo
                        consequatur.</p>
                </div>
                <div class="about-info">
                    <h1>Who We Do</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil delectus suscipit fugiat quis?
                        Ipsa, sapiente delectus pariatur necessitatibus quas quasi corrupti. Aut vero eligendi quo
                        consequatur.</p>
                </div>
            </div>
        </div>
        <div class="subscribsion-box">
            <h1>JOIN OUR NEWS-LETTER</h1>
            <input type="email" placeholder="Write your email address hear">
            <button class="button">Subscribe</button>
        </div>
    </main>




    <footer class="main_footer">
        <div class="main-footer_div">
            <nav class="main-footer_nav">
                <ul class="main-footer-ul">
                    <li class="main-footer-list">
                        <h3 class="footer_info"> Our Links</h3>
                    </li>
                    <li class="footer_info"><a href="">Contact Us</a></li>
                    <li class="footer_info"><a href="">Privacy Policy</a></li>
                    <li class="footer_info"><a href="">Terms and Condition</a>
                    </li>
                </ul>
            </nav>
            <nav class="main-footer_nav">
                <ul class="main-footer-ul">
                    <li class="main-footer-list">
                        <h3 class="footer_info"> Importent links</h3>
                    </li>
                    <li class="footer_info"><a href="">Aboutus</a></li>
                    <li class="footer_info"><a href="">Contact us</a></li>
                    <li class="footer_info"><a href="">Privacy Policy</a></li>
                    <li class="footer_info"><a href="">Terms & Conditions</a></li>
                </ul>
            </nav>
            <nav class="main-footer_nav">
                <ul class="main-footer-ul">
                    <li class="main-footer-list">
                        <h3 class="footer_info">Biz House</h3>
                    </li>
                    <li class="footer_info"><a href="">Fri-Sat-closed</a></li>
                    <li class="footer_info"><a href="">Sunday-Thursdays</a></li>
                    <li class="footer_info"><a href="">Open @ 08:00 AM - 06:00</a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="endtag"> @ BY AUCTIONX</nav>
    </footer>
    <script src="shared.js"></script>
</body>

</html>