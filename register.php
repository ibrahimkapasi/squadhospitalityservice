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
            <div class='title'>REGISTRATION</div>
            <form action="home.php" method="POST">
                <div class='user-details'>
                    <div class='input-box'>
                        <span class='details'>Full Name</span>
                        <input type="text" placeholder='Enter your name' name="fname" required>
                    </div>
                    <div class='input-box'>
                        <span class='details'>E-mail</span>
                        <input type="email" placeholder='johndoe@gmail.com' name="email" required>
                    </div>
                    <div class='input-box'>
                        <span class='details'>Mobile No</span>
                        <input type="" placeholder='9999 888 777' name="phone" required>
                    </div>
                    <div class='input-box'>
                        <span class='details'>Age</span>
                        <input type="" placeholder='Age' name="age" required>
                    </div>
                    <div class='input-box'>
                        <span class='details'>Gender</span>
                        <select name="gender">
                            <option value="Not Selected">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                </div>

                <div class='buttonn'>
                    <input class='innerbtn' type="submit" value="Register" name="register">
                </div>
            </form>
        </div>
    </div>
</body>

</html>


<?php
error_reporting(0);
if ($_POST['register']) {
    $fname  = $_POST['fname'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $age    = $_POST['age'];
    $gender = $_POST['gender'];

    if ($fname != "" && $email != "" && $phone != "" && $age != "" && $gender != "") {

        $query = "INSERT INTO form (firstname,email,phone,age,gender) VALUES ('$fname','$email','$phone','$age','$gender')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('Form Submitted')</script>";
        } else {
            echo "Insert Failed";
        }
    } else {
        echo "Plese fill all the fields";
    }
}

?>