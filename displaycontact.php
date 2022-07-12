<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Data</title>
    <link rel="stylesheet" href="./home.css">
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
</body>

</html>

<?php

include('connection.php');

$query = "SELECT * FROM contact ";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_num_rows($data);

if ($total != 0) {
?>

    <h2>Contact Us Form Table</h2>
    <style>
        h2 {
            text-align: center;
            color: #3C3C55;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 35px;
        }

        #table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin-left: 10%;
            text-align: center;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #3C3C55;
            color: white;
        }

        #table td a {
            text-decoration: none;
        }

        .update,
        .delete {
            padding: 5px;
            font-weight: 500;
            font-size: 15px;
            border-radius: 7px;
            width: 65px;
            background-color: #3C3C55;
            color: #fff;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .delete {
            background-color: red;
            margin-left: 10px;
        }
    </style>

    <table id="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    <?php

    while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr> <td>" . $result['id'] . "</td> <td>" . $result['name'] . "</td>
        <td>" . $result['email'] . "</td>
        <td>" . $result['message'] . "</td>
        </tr>";
    }
}

    ?>

    </table>