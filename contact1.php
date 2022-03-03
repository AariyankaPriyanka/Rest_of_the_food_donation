<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="contact1.css">
</head>
<body>

    <header>
        <div class="logo">Food Donation</div>
        <nav>
            <ul>
                <li> <a href="Home.html"> Home</a></li>
                <li> <a href="aboutUs.html">About us</a></li>
                <li> <a href="image.html"> Galary</a></li>
                <li> <a href="contact1.php">Contact</a></li>
                <li> <a href="index.html">Donation</a></li>
               
            </ul>
        </nav>

    <section class="contact">
        <div class="content">
            <h2><b>Contact Details</b></h2>
            <p><b><i>Contact with us for further details.</i></b></p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3><b>Address</b></h3>
                        <p><b>No-34, KKS Road,<br>Jaffna</b></p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3><b>Phone</b></h3>
                        <p><b>+94-766082446</b></p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3><b>Email</b></h3>
                        <p><b>sspriyanka1997@gmail.com</b></p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="POST" action="contact_form_data.php">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="fullname" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Eamil</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="messages" id="" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send" name="send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <a href="index.html">
        <button style="background-color: #a251a6; color:rgb(243, 244, 247); border-radius: 30px;
         font-size: 40px; padding: 50px; padding-top: 15px; padding-right: 10px; padding-left: 10px;
          padding-bottom: 15px; font-family: sans-serif;
          position: absolute;top:105%;left: 300px;width: 200px;transform: translateY(-40%);"> Donation </button>
    </a>

    <div class="banner">
    </div>
    <footer>
        <p>All right reserved by our website</p>
    </footer>
    
</body>
</html>
