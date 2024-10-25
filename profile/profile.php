<?php
session_start();
$user;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    include '../db.php';
    $userid = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE id= '$userid'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $name = $user['full_name'];
    $emai = $user['email'];
    $balance = $user['balance'];
    $img = $user['img'];
    if (isset($_POST['submit'])) {
        // Get form data
        $productName = $_POST["product_name"];
        $productDescription = $_POST["product_description"];
        $listingTime = $_POST["product_listing_time"];
        $endTime = $_POST["product_end_time"];

        // Upload images
        $image1 = $_FILES["image1"]["name"];
        $image2 = $_FILES["image2"]["name"];
        $image3 = $_FILES["image3"]["name"];

        $targetDir = "productimg/";
        $targetFile1 = $targetDir . basename($image1);
        $targetFile2 = $targetDir . basename($image2);
        $targetFile3 = $targetDir . basename($image3);

        // Store uploaded images
        move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFile1);
        move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFile2);
        move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFile3);

    //     // Insert data into database
    //     $sql = "INSERT INTO products (Product_name, Product_description,bided_user_id ,img_dir, img_dir2, img_dir3, Product_listing_time, Product_End_time)
    //     VALUES ('$productName', '$productDescription',$userid,'$image1', '$image2', '$image3', '$listingTime', '$endTime')";

    //     if ($conn->query($sql) === TRUE) {
    //         echo "Product uploaded successfully.";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../shared.css">
    <link rel="stylesheet" href="profile1.css">
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
                <li class="main-nave__item main-nave--cta">
                    <a href="../Login/login.php">Login or Singup</a>
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
                <a href="liveauction.php">Live auction</a>
            </li>
            <li class="main-nave__item main-nave--cta">
                <a href="../Singup/singup.php">Singup</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="Taitle">
            <h1>DASHBORD</h1>
        </div>
        <div class="sub_nav">
            <BUtton class="button dashbord-button">DASHBORD</BUtton>
            <BUtton class="button profile-button">MY PROFILE</BUtton>
            <BUtton class="button bid-history-button">BID HISTORY</BUtton>
            <BUtton class="button purchrs-button">PURCHASE</BUtton>
        </div>
        <div class="dasbord-box">
            <div class="dasbord">
                <div class="status">
                    <div class="status-card">
                        <div class="laft-part">
                            <h3>Order Complete</h3>
                            <h2>700</h2>
                        </div>
                        <div class="right-part">
                            <img class="tic" src="img/tic.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="status">
                    <div class="status-card">
                        <div class="laft-part">
                            <h3>Order Complete</h3>
                            <h2>700</h2>
                        </div>
                        <div class="right-part">
                            <img src="img/gear.jfif" alt="">
                        </div>
                    </div>
                </div>
                <div class="status">
                    <div class="status-card">
                        <div class="laft-part">
                            <h3>Order Complete</h3>
                            <h2>700</h2>
                        </div>
                        <div class="right-part">
                            <img src="img/location.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="status">
                    <div class="status-card">
                        <div class="laft-part">
                            <h3>Order Complete</h3>
                            <h2>700</h2>
                        </div>
                        <div class="right-part">
                            <img src="img/time.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            ?>
                <div class="container">
                    <div class="profile-picture">
                        <img src="../../<?php echo $img ?>" alt="Profile picture">
                        <button class="Edit pic">Change profile</button>
                    </div>
                    <div class="account-name">
                        <h1><?php echo $name; ?> <button class="Edit">
                                <p>Edit</p>
                            </button> </h1>
                    </div>
                    <div class="E-mail">
                        <h2>E-mail: <?php echo $emai; ?><button class="Edit">
                                <p>Edit</p>
                            </button> </h2>

                    </div>
                    <div class="account-balance">
                        <p>account-balance: <?php echo $balance ?></p>
                    </div>
                    <BUtton class="button logout" style="background-color: #ff0000" href="../index.php">
                        LOGOUT
                    </BUtton>
                </div>
            <?php } ?>
        </div>
        <div class="bid-history">
            <!-- <table>
                <tr>
                    <th>Proudct</th>
                    <th>Product Name</th>
                    <th>Bid Amount</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td><img src="../Auctiondetails/productimage/2024-lamborghini-revuelto-127-641a1d518802b.jpg" alt=""></td>
                    <td>Lamborghini</td>
                    <td>100000$</td>
                    <td>win</td>
                </tr>
                <tr>
                    <td><img src="../Auctiondetails/productimage/download.jfif" alt=""></td>
                    <td>Ferrari</td>
                    <td>200000$</td>
                    <td>Lost</td>
                </tr>
                <tr>
                    <td><img src="../Auctiondetails/productimage/images.jfif" alt=""></td>
                    <td>Lamborghini</td>
                    <td>50000$</td>
                    <td>win</td>
                </tr>
            </table> -->


            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 form-container">
                        <h2>Product Upload Form</h2>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="productName" required>
                            </div>
                            <div class="form-group">
                                <label for="productDescription">Product Description</label>
                                <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image1">Image 1</label>
                                <input type="file" class="form-control-file" id="image1" name="image1" required>
                            </div>
                            <div class="form-group">
                                <label for="image2">Image 2</label>
                                <input type="file" class="form-control-file" id="image2" name="image2" required>
                            </div>
                            <div class="form-group">
                                <label for="image3">Image 3</label>
                                <input type="file" class="form-control-file" id="image3" name="image3" required>
                            </div>
                            <div class="form-group">
                                <label for="listingTime">Listing Time</label>
                                <input type="date" class="form-control" id="listingTime" name="listingTime" required>
                            </div>
                            <div class="form-group">
                                <label for="endTime">End Time</label>
                                <input type="date" class="form-control" id="endTime" name="endTime" required>
                            </div>
                            <input type="submit" value="submit" name="submit" href="profile.php">
                        </form>
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
    <script src="profile.js"></script>
    <script src="../shared.js"></script>
</body>

</html>