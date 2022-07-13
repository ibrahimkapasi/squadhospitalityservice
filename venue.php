<?php include("connection.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
    <link rel="stylesheet" href="./home.css">
</head>

<body>

    <section id="header">
        <a href="home.php"><img src="./img/logo-1.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>


    </section>

    <div class='form_body'>
        <div class='box'>
            <div class='title'>Enter Venue</div>
            <form action="#" method="POST">
                <div class='user-details'>
                    <div class='input-box'>
                        <span class='details'>Venue / Address</span>
                        <input type="text" placeholder='Enter your venue' name="address" required>
                    </div>
                </div>

                <div class='buttonn'>
                    <input class='innerbtn' type="submit" value="Submit" name="venue">
                </div>
            </form>
        </div>
    </div>
</body>

</html>


<?php
error_reporting(0);
if ($_POST['venue']) {
    $address  = $_POST['address'];

    if ($address != "") {

        $query = "INSERT INTO venue (address) VALUES ('$address')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('Submitted')</script>";
        } else {
            echo "Insert Failed";
        }
    } else {
        echo "Plese fill all the fields";
    }
}

?>