<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
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

    <section id="main">
        <h2>contact us</h2>
        <div class="information">
        <div class="user-info">
            <div class="form">
                <h4>Post Here</h4>
                <p>Name :  <input type="text" placeholder="enter name" aria-rowcount="50px">  </p> 
                <p>Surname : <input type="text" placeholder="enter surname"></p>
                <p>Email : <input type="email" placeholder="enter Email"></p>
                <p>Descrption : <input type="text" placeholder="description" aria-rowspan="30px" aria-colspan="40px"></p>
                
                        <div class="btn">
                            <button>Submit</button>
                            <button>Cancel</button>
                         </div>
                 </div>
        </div>
        <div class="company-Info">
            <center>
                <h4>Why do you choose us ?</h4>
            </center>
            <p>This website is always active in any time.It is providing the best offers under best prices on electronic gadgets, home appliances, dresscodes, utensils what not every thing. My suggestion is always stay tuned for exicting offers and rewards to grab. Hope always these embracing offers are waiting for you . Thank you!!! visit again</p>
        </div>
    </div>
    </section>
    <section>
        <div class="address">
                <div class="address-info">
                    <div class="location-icon">
                        <h4><i class="fa-solid fa-location-dot"></i> Address</h4>
                    </div>
                    <p>4-48 , Ramabhadrapuram</p>
                    <p>vizianagaram</p>
                    <p>535579</p>
                    <p>Andhra Pradesh</p>
                </div>
                <div class="contact-info">
                    <h4> <i class="fa-solid fa-phone"></i> Contact here</h4>
                    <p>Time : 10am to 5pm</p>
                    <div class="contact-icon">
                        <p>+91 9676336741</p>
                        <p>+91 7719534267</p>
                    </div>
                </div>
                <div class="map">
                        <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7567.623104411258!2d83.2788631!3d18.4921933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3b978f34215ab3%3A0xf82e281d8b4492cf!2sZP%20High%20School%2C%20Ramabhadrapuram%2C%20Andhra%20Pradesh%20535579!5e0!3m2!1sen!2sin!4v1712726812141!5m2!1sen!2sin" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                </div>
        </div>
    </section>
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
</body>
</html>