<?php
session_start();
$userid = $_SESSION['user_id'];
include '../db.php';
$id = $_GET["id"];



$sql = "SELECT * FROM product where product_id=$id ";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);
$img1 = $product['img_dir'];
if ($product['img_dir2'] != null) {
    $img2 = $product['img_dir2'];
}
if ($product['img_dir3'] != null) {
    $img3 = $product['img_dir3'];
}


if($userid!=null){
    if (isset($_POST['submit'])) {
        $amount = $_POST['amount'];
        $sql = "SELECT MAX(Bid_amount) AS max_bid,Bid_user   FROM bid WHERE Bid_user = $userid AND Bid_product=$id";
        $result = mysqli_query($conn, $sql);
        $ans = mysqli_fetch_assoc($result);
    
        if ($ans['Bid_user'] == null &&  $ans['max_bid'] < $amount) {
            $sql = "INSERT INTO bid (Bid_product, Bid_user,Bid_amount) value($id,$userid,$amount)";
            $result = mysqli_query($conn, $sql);
        } else if ($ans['Bid_user'] != null &&  $ans['max_bid'] < $amount) {
            $sql = "UPDATE `bid` SET `Bid_amount` = $amount WHERE `Bid_user` =$userid AND Bid_product=$id";
            $result = mysqli_query($conn, $sql);
        }else if ($ans['Bid_user'] != null &&  $ans['max_bid'] > $amount){
            echo " <script> alert('Amount is lower then te previous bid')</script>";
        }
    }
}else{
    echo " <script> alert('You mast login first')</script>";
}

$sql = "SELECT full_name,img,Bid_amount FROM user AS u JOIN bid AS b ON u.id = b.Bid_user WHERE b.Bid_product = $id; ";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../shared.css">
    <link rel="stylesheet" href="details1.css">
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
                    <a href="Apoutus.php">About us</a>
                </li>
                <li class="main-nave__item">
                    <a href="">Contact us</a>
                </li>
                <li class="main-nave__item main-nave--cta">
                    <a href="../LiveAuction/liveauction.php">Live auction</a>
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
                <a href="../Singup/singup.phpindex.php">Singup</a>
            </li>
        </ul>
    </nav>


    <main>

        <?php

        ?>
        <h1 class="Taitle">Auction Details</h1>
        <div class="product-boxs">
            <div class="product-box images">
                <div class="smolimages">
                    <div class="smolimage smolimage1"><img src="../../<?php echo $product['img_dir'] ?>" alt=""></div>
                    <div class="smolimage smolimage2"><img src="../../<?php echo $img2 ?>" alt=""></div>
                    <div class="smolimage smolimage3"><img src="../../<?php echo $img3 ?>" alt=""></div>
                </div>
                <div class="bigimage">
                    <img class="bgimg" src="../../<?php echo $img1 ?>" alt="">
                </div>
            </div>
            <div class="product-box product-info">
                <h2><?php echo $product['product_name'] ?></h2>
                <p>Bidding Price:$460.00</p>
                <div class="biddingbox">
                    <h3>Bid Now</h3>
                    <p>Bid Amount:Minimum Bid $20.00</p>
                    <form method="post">
                        <div class="placebidbox">
                            <input type="number" placeholder="$00.00" name="amount" require>
                            <button class="button" type="submit" name="submit"> Place a Bid </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>



        <div class="timerboxo">
            <div class="timerboxborder">
                <p class="time-title">Auction End's In:
                <div>
                    <p id="days">00</p>
                </div>
                <div>
                    <p id="hours">00</p>
                </div>
                <div>
                    <p id="minutes">00</p>
                </div>
                <div>
                    <p id="seconds">00</p>
                </div>
            </div>
        </div>


        <div>
            <p class="Sub-Taitle">Description</p>
            <p><?php echo $product['product_description'] ?></p>
        </div>
        <p class="Sub-Taitle">Bid History</p>


        <div class="bid-history">

            <?php
            while ($resorc = mysqli_fetch_assoc($result)) {
            ?>

                <div class="bidders-box">
                    <div class="user-img-contaner"><img src="../../<?php echo $resorc['img'] ?>" alt="">
                        <div class="user-bid">
                            <p><?php echo $resorc['full_name'] ?></p>
                        </div>
                    </div>

                    <div>
                        <p><?php echo $resorc['Bid_amount'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>


        <!-- <p class="Sub-Taitle">Other auction</p>
        <div>

        </div> -->

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
                        <h3 class="footer_info"> contact info</h3>
                    </li>
                    <li class="footer_info"><a href="">House-451</a></li>
                    <li class="footer_info"><a href="">Khilgaon</a></li>
                    <li class="footer_info"><a href="">Dhaka#1219</a>
                    </li>
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
    <script src="details.js"></script>
    <script src="../shared.js"></script>
</body>

</html>