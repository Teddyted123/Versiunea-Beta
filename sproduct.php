    <?php
    session_start();
    include 'db_connection.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TrendyCloset</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section id="header">
            <a herf="#"><img src="Imagini/logo.png" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a class="underline-hover-effect" href="index.html">Home</a></li>
                    <li><a class="underline-hover-effect" href="shop.html">Men</a></li>
                    <li><a class="underline-hover-effect" href="shop2.html">Women</a></li>
                    <li><a class="underline-hover-effect" href="about.html">About</a></li>
                    <li><a class="underline-hover-effect" href="contact.html">Contact</a></li>
                    
                    <?php
                    // Check if the user is logged in
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                        echo '<li><a class="underline-hover-effect" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>';
                        echo '<li><a class="underline-hover-effect" href="logout.php">Logout</a></li>';
                        
                    } else {
                        echo '<li><a class="underline-hover-effect" href="login.php">Login</a></li>';
                        echo '<li><a class="underline-hover-effect" href="register.php">Register</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </section>

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="Imagini/products/geaca_1.png" width="100%" id="MainImg" alt="">
            </div>
            <div class="single-pro-details">
                <h6>Home / Geaca</h6>
                <h4>Geaca neagra</h4>
                <h2>490 RON</h2>
                <select>
                    <option>Select size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                    <option>XS</option>
                </select>
                <input type="number" value="1">
                <button class="normal">Add to cart</button>
                <h4>Product Details</h4>
                <span>Geaca neagra</span>
            </div>
        </section>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up For Newsletters</h4>
                <p>Get e-mail updates about our latest special offers. </p>
            </div>
            <div class="form">
                <input type="text" placeholder="Enter your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="Imagini/logo2.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong> Timisoara, Romania</p>
                <p><strong>Phone:</strong> +40 720 226 382</p>
                <p><strong>Email:</strong> tudor.calugar03@e-uvt.ro</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>Information</h4>
                <a href="#">About us</a>
                <a href="#">Contact us</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Returns & Exchanges</a>               
                <a href="#">Shipping & Delivery</a>
            </div>
        </footer>

        <script src="script.js"></script>
    </body>

    </html>