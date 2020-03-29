<?php
// Include config file
require_once "config.php";
//Variables

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Workshop Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php include("modularized/navigation.php");?>
    <?php
    $sql = "SELECT * from `contacts`";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo("<table class='table container' border='2' style='border-collapse:collapse; margin-top:40px'>
        <thead>
          <tr>
            <th scope='col'>First Name</th>
            <th scope='col'>Last Name</th>
            <th scope='col'>Gender</th>
            <th scope='col'>E-mail</th>
          </tr>
        </thead>");
        while ($row = $result->fetch_assoc()) {
            $fname = $row['fname'];
            $lname = $row['lname'];
            $gender = $row['gender'];
            $email = $row['email'];
            echo("
            <tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$gender</td>
            <td>$email</td>
             </tr>
        </div>
    </div>
  
    ");
        }
    }
    
    $mysqli->close();

    ?>
</body>

</html>