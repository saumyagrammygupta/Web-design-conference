<?php
// Include config file
require_once "config.php";

$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("wd_conf", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $refferal = $_POST['refferal'];
    $chk="";
    foreach($refferal as $chk1)  
    {  
       $chk .= $chk1.",";  
    }  
    $query = mysql_query("INSERT INTO `contacts`( `fname`, `lname`, `gender`,`refferal`, `email`, `address`) VALUES ('$fname', '$lname', '$gender','$chk','$email', '$address');");
     

    header("location: index.php");
    }
    mysql_close($connection); // Closing Connection with Server

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Workshop Website</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu">
                            <li class="cta"><a href="index.php">Home</a></li>
                            <li class="cta"><a href="about.html">About Us</a></li>
                            <li class="cta"><a href="contact.php">Registration</a></li>
                            <li class="cta"><a href="speakers.html">Speakers</a></li>
                            <li class="cta"><a href="aboutme.html">About Me</a></li>
                            <li class="cta"><a href="features.html">Features</a></li>
                            <li class="cta"><a href="programs.html">Program schedule</a></li>
                            <li class="cta"><a href="gallery.html">Gallery</a></li>
                            <li class="cta"><a href="buy-tickets.html">Buy Tickets</a></li>


                        </ul>
                    </nav>
                    <div style="position: relative; top: 3px;"><a href="#"><span class="icon-menu h3"></span></a></div>
                </div>
            </div>
    </div>
    </header>

    <div class="container">
        <div class="row align-items-center">

        </div>
    </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="site-section-heading">
                <h2>Registration form</h2>
            </div>
            <p><b>
                    Please enter your information into this form to reserve your conference reservation!!
                </b></p>
            <p><b>
                    SEE YOU ALL VERY SOON!!!
                </b></p>

            <form method="post">
                <div class="form-group">
                    <label class="" width="40%">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    <label class="" for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" class="form-control">
                </div>
                <label class="" for="gender">Gender:</label>
                <div class="form-group">
                    <input type="radio" name="gender" value="female">Female<br>
                    <input type="radio" name="gender" value="male">Male<br>
                </div>
                <label class="" for="where">Where did you hear about us?</label>
                <input type="checkbox" name="refferal[]" value="friend">Friend<br>
                <input type="checkbox" name="refferal[]" value="google">Google <br>
                <input type="checkbox" name="refferal[]" value="blog_post">Blog post<br>

                <div class="form-group">
                    <label class="" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label class="label" for="subject">Address</label>
                    <input type="address" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div>
                <p>Address</p>
                <p>203 Fake St. Mountain View, San Francisco, California, USA</p>

                <p>Phone</p>
                <p><a href="#">+1 232 3235 324</a></p>

                <p>Email Address</p>
                <p><a href="#">webdesignconference@gmail.com</a></p>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="container foot-row">
            <div class="foot-col">
                <h2>About Event</h2>
                <p>
                    This is a Web Design Conference. Here many Renowned web designers shall
                    be speaking about their experience and their journey through out their career.
                </p>
            </div>
            <div class="foot-col">
                <h2>Quick Links</h2>
                <ul class="list-unstyled">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Speakers</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>

            <div class="foot-col">
                <h2>Connect with Us</h2>
                <p>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </p>
            </div>
            <div class="foot-col">
                <p>
                    Copyright © Khushi Gupta 2019 All rights reserved
                </p>
            </div>
    </footer>
</body>

</html>