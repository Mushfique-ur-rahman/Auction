<?php
include '../db.php';
$sql = "SELECT * FROM `product`";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../shared.css">
    <link rel="stylesheet" href="liveauction.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <title>Live Auction</title>
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
                    <a href="Apoutus.php">About us</a>
                </li>
                <li class="main-nave__item">
                    <a href="">Contact us</a>
                </li>
                <li class="main-nave__item main-nave--cta">
                    <a href="liveauction.php">Live auction</a>
                </li>
                <li class="main-nave__item main-nave--cta">
                    <a href="../Login/login.php">Login or Singup</a>
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
                <a href="../Singup/singup.php">Singup</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="products">
            <div class="container">
                <h1 class="Taitle">LIVE AUCTION</h1>
                <p class="text-light">Best Auction Site With Great Products!!</p>

                <div class="product-items">
                    <?php
                    while ($resorc = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="product">
                            <div class="product-content">
                                <div class="product-img">
                                    <img src="../../<?php echo$resorc['img_dir']?>" alt="product image">
                                </div>
                                <div class="product-btns">

                                    <button type="button" class="btn-buy" ><a  href="../Auctiondetails/details.php?<?php echo'id=$resorc["product_id "]'?>>bid now</a>
                                        <span><i class="fas fa-shopping-cart"></i></span>
                                    </button>

                                </div>
                            </div>

                            <div class="product-info">

                                <a href="#" class="product-name"><?php echo$resorc['product_name']?></a>
                                <p class="product-price">$ 150.00</p>

                            </div>

                        </div>
                    <?php } ?>



                </div>
            </div>
        </div>
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