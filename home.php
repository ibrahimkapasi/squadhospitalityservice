<?php include("connection.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squad Hospitality Service</title>
    <link rel="stylesheet" href="./home.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

</head>

<body>

    <section id="header">
        <a href="home.php"><img src="./img/logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>


    </section>

    <section class="home">
        <div class='textbox'>
            <h1>SQUAD HOSPITALITY SERVICE</h1>
            <p> “Hospitality is almost impossible to teach. It's all about hiring the right people.” — Danny Meyer, CEO of Union Square Hospitality Group</p>
            <a href="register.php" class='button'>REGISTER</a>
        </div>
    </section>

    <section id="about">
        <div class="about_section">
            <div class="inner_container">
                <h1>#AboutUs</h1>
                <p class='text'>A hotel manager is a professional trained to run and supervise the areas of reception, maintenance, staff, sales, administration, restaurants etc. A hotel manager carries out a large amount of functions in order to guarantee the maximum comfort for the customers. When you are a hotel manager you have to plan, organize and co-ordinate the functioning of the hotel.</p>
                <div class='skills'>
                    <span>Commitment</span>
                    <span>Enthusiasm</span>
                    <span>Teamwork</span>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class='gallery_body'>
            <div class="rows row_mobile">
                <div class="columns columns_mobile">
                    <img src="./img/pic1.jpg" alt="">
                    <img src="./img/pic9.jpg" alt="">

                </div>
                <div class="columns columns_mobile">
                    <img src="./img/pic3.jpg" alt="">
                    <img src="./img/pic4.jpg" alt="">
                </div>
                <div class="columns columns_mobile">
                    <img src="./img/pic5.jpg" alt="">
                    <img src="./img/pic6.jpg" alt="">
                </div>
                <div class="columns columns_mobile">
                    <img src="./img/pic7.jpg" alt="">
                    <img src="./img/pic8.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class='test_body'>
            <div>
                <h1>Client Reviews</h1>
                <p>What our clients are saying...</p>
                <div class="testimonial">
                    <div class="small-container">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-pen-to-square test_icon_1"></i>
                                <p>I'm Happy with the deal i got from the company, The price are cheaper than other sites and there was no issue with the product it was fantastic. RedStore is reliable. I prefer Redstore over all websites out there.</p>
                                <div class="rating">
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                </div>

                                <i class="fa-regular fa-user test_icon_2"></i>
                                <h3>Ginny Weasly</h3>
                            </div>

                            <div class="col-3">
                                <i class="fa fa-pen-to-square test_icon_1"></i>

                                <p>This company has been one of my favorites for a long time, and their products are both high-quality and long-lasting. They're trendy, comfortable, and affordable. </p>
                                <div class="rating">
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                </div>

                                <i class="fa-regular fa-user test_icon_2"></i>
                                <h3>Albus Dumbledore</h3>
                            </div>
                            <div class="col-3">

                                <i class="fa fa-pen-to-square test_icon_1"></i>
                                <p>I Highly recommend RedStore for shopping.The quality of the product is best, They even offer great deals to the customers. Customers Care services are there for us 24*7. </p>
                                <div class="rating">
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star test_icon_star"></i>
                                    <i class="fas fa-star-half test_icon_star"></i>
                                </div>

                                <i class="fa-regular fa-user test_icon_2"></i>
                                <h3>Lilly Potter</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="content">
            <h2>Get In Touch</h2>
            <p>We Are Here To Help You!</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box_1">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Shop no 3, Madanlal Dhingra Rd, Panch Pakhdi, Thane West, <br> Maharashtra.</p>
                    </div>
                </div>
                <div class="box_1">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91 79777 22681</p>
                    </div>
                </div>
                <div class="box_1">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>squadhospitalityservice@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="#" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="fname" required placeholder="Your Name">
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required placeholder="Your Email">
                    </div>
                    <div class="inputBox">
                        <textarea name="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send" name="send">
                    </div>

                </form>
            </div>
        </div>
    </section>

    <section id="footer">
        <footer>
            <div class='footer-content'>
                <p>Remember, a person who wins success in hospitality may have been counted out many times before.He wins because he refuses to give up.</p>
                <ul class='socials'>
                    <li><a href='#'>
                            <i class="fa-brands fa-facebook social_1"></i>
                        </a></li>
                    <li><a href='#'>
                            <i class="fa-brands fa-instagram social_2"></i>
                        </a></li>
                    <li><a href='#'>
                            <i class="fa-brands fa-google social_3"></i>
                        </a></li>
                </ul>
            </div>
            <div class='footer-bottom'>
                <p>2022 Squad Hospitality Service. </p>

            </div>
        </footer>
    </section>


    <script>
        const bar = document.getElementById('bar')
        const nav = document.getElementById('navbar')
        const close = document.getElementById('close')

        if (bar) {
            bar.addEventListener('click', () => {
                nav.classList.add('active');
            })
        }

        if (close) {
            close.addEventListener('click', () => {
                nav.classList.remove('active');
            })
        }

        const mainImg = document.getElementById('MainImg');
        const smalling = document.querySelectorAll('.small-img');

        smalling.forEach((small) => {
            small.addEventListener('click', () => {
                mainImg.src = small.src
            })
        })
    </script>
</body>

</html>

<?php
error_reporting(0);
if ($_POST['send']) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($fname != "" && $email != "" && $message != "") {

        $query = "INSERT INTO contact (name,email,message) VALUES ('$fname','$email','$message')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('Submitted')</script>";
        } else {
            echo "Not Submitted";
        }
    }
}

?>