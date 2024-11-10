<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="header">
        <a href="#"><img src="photos/dealfinderx-high-resolution-logo.jpeg" class="logo" alt="Logo" height="100px"></a>
        <div class="searchbar">
            <input type="text" placeholder="search here" class="searcharea">
            <i class="fa-solid fa-magnifying-glass"></i>
            
        </div>
        <div>
        <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION["user"])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
</section>

<div class="about-section">
    <h1>About Us</h1>
    <p>Welcome to our platform! We're your go-to destination for the best offers and sales across various platforms. Our mission is simple: to provide you with convenient access to the most enticing deals on a wide range of products and services. With our dedicated team continuously scouring the web, you can rest assured that you'll find the latest discounts and promotions right here. Whether you're in search of electronics, fashion, home goods, or more, we've got you covered. Say goodbye to endless scrolling and let us simplify your shopping experience. Explore our curated selection of offers today and discover incredible savings tailored to your preferences. Happy shopping with us!.</p>
  </div>
  
  <h2 style="text-align:center">Our Head</h2>
  <div class="founder-image">
    <center>
        <img src="photos/gupta photo - Copy.png" alt="gupta" >
    </center>
    </div>
        <div class="container">
            <center>
          <h2>Narasimha Gupta</h2>
          <p class="title">CEO & Founder</p>
          <p>I'm Gupta, and I started this with passion to make finding great deals easier for you. Together, let's make shopping simpler and more satisfying with carefully chosen offers that guarantee happiness.</p>
          <p>narasimhagupta2004@gmail.com</p>
          <p><a href="contact.html"><button class="button">Contact</button></a></p>
        </center>
        </div>   
</body>
<footer class="section-p1  banner" >
    <div class="col">
            <img src="photos/dealfinderx-high-resolution-logo.jpeg" alt="logo" height="65px">
            <h4>contact</h4>
            <p><strong>Address : </strong>4-48 ,Near Main-road</p>
            <p>vizianagaram ,Andhra Pradesh</p>
            <p><strong>Phone : </strong>9676336741</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Privacy policy</a>
        <a href="#">Terms & Conditions</a>
        
    </div>

    <div class="col">
        <h4>Account</h4>
        <a href="#">My account</a>
        <a href="#">Sign in</a>
        <a href="#">Help</a>
    </div>

</footer>
</html>