<?php
// Include config file
require_once "config.php";

if (isset($_POST['submit'])) { // Fetching variables of the form which travels in URL
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $refferal = $_POST['refferal'];
    $chk="";
    foreach ($refferal as $chk1) {
        $chk .= $chk1.",";
    }
    $query = ("INSERT INTO `contacts`( `fname`, `lname`, `gender`,`refferal`, `email`, `address`) VALUES ('$fname', '$lname', '$gender','$chk','$email', '$address');");
     
    $mysqli->query($query);
    header("location: index.php");
}
   $mysqli->close(); // Closing Connection with Server

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Workshop Website</title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include("modularized/navigation.php")?>
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
                    <label class="">First Name</label>
                    <input type="text" id="fname" name="fname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="" for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" class="form-control" required>
                </div>
                <label class="" for="gender">Gender:</label>
                <div class="form-group">
                    <input type="radio" name="gender" value="female">Female<br>
                    <input type="radio" name="gender" value="male">Male<br>
                </div>
                <label class="" for="where">Where did you hear about us?</label><br>
                <input type="checkbox" name="refferal[]" value="friend">Friend<br>
                <input type="checkbox" name="refferal[]" value="google">Google <br>
                <input type="checkbox" name="refferal[]" value="blog_post">Blog post<br>

                <div class="form-group">
                    <label class="" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="subject">Address</label>
                    <input type="address" name="address" class="form-control" required>
                </div>

                <button name="submit" type="submit" class="btn btn-primary">Submit</button>

            </form>
            <div>
                <h2>Address</h2>
                203 Fake St. Mountain View, San Francisco, California, USA

                <h2>Phone</h2>
                <p><a href="#">+1 232 3235 324</a></p>

                <h2>Email Address</h2>
                <p><a href="#">webdesignconference@gmail.com</a></p>
            </div>
        </div>
    </div>
    <?php include("modularized/footer.php")?>
</body>

</html>