<?php include("connection.php");

$id = $_GET['id'];
$query = "SELECT * FROM form WHERE id='$id'";

$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>


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

    <section id="head" class="header">
        <div class="navbar">
            <img class="logo" src="./img/logo.png" alt="">
            <nav>
                <ul class="nav_ul">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="testimonials">Testimonials</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class='form_body'>
            <div class='box'>
                <div class='title'>UPDATE DETAILS</div>
                <form action="#" method="POST">
                    <div class='user-details'>
                        <div class='input-box'>
                            <span class='details'>Full Name</span>
                            <input type="text" placeholder='Enter your name' name="fname" value="<?php echo $result['firstname']; ?>">
                        </div>
                        <div class='input-box'>
                            <span class='details'>E-mail</span>
                            <input type="email" placeholder='johndoe@gmail.com' name="email" value="<?php echo $result['email']; ?>">
                        </div>
                        <div class='input-box'>
                            <span class='details'>Mobile No</span>
                            <input type="" placeholder='0000000000' name="phone" value="<?php echo $result['phone']; ?>">
                        </div>
                        <div class='input-box'>
                            <span class='details'>Age</span>
                            <input type="" placeholder='Age' name="age" value="<?php echo $result['age']; ?>">
                        </div>
                        <div class='input-box'>
                            <span class='details'>Gender</span>

                            <select name="gender">
                                <option value="">Select</option>
                                <option value="male" <?php if ($result['gender'] == 'male') {
                                                            echo "selected";
                                                        } ?>>Male</option>
                                <option value="female" <?php if ($result['gender'] == 'female') {
                                                            echo "selected";
                                                        } ?>>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class='buttonn'>
                        <input class='innerbtn' type="submit" value="UPDATE" name="update">
                    </div>
                </form>
            </div>
        </div>
</body>

</html>


<?php

if ($_POST['update']) {
    $fname  = $_POST['fname'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $age    = $_POST['age'];
    $gender = $_POST['gender'];

    if ($fname != "" && $email != "" && $phone != "" && $age != "" && $gender != "") {

        $query = "UPDATE form SET firstname='$fname', email='$email', phone='$phone', age='$age', gender='$gender' WHERE id = $id ";

        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('Record Updated')</script>";
?>
            <meta http-equiv="refresh" content="0; url = http://localhost/squad%20hospitality%20php/display.php" />

<?php
        } else {
            echo "Failed To Update";
        }
    } else {
        echo "Plese fill all the fields";
    }
}

?>