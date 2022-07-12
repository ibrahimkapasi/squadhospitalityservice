<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
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

include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_num_rows($data);

if ($total != 0) {
?>

    <h2>Registered Members </h2>

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
            <th>Firstname</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Operations</th>
        </tr>

    <?php

    while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td>" . $result['id'] . "</td>
        <td>" . $result['firstname'] . "</td>
        <td>" . $result['email'] . "</td>
        <td>" . $result['phone'] . "</td>
        <td>" . $result['age'] . "</td>
        <td>" . $result['gender'] . "</td>
        <td>
        <a href='delete.php?id=$result[id]'> <input type='submit' value='Delete' class='delete' onclick= 'return checkdelete()'> </a> 
        </td>
        </tr>";
    }
}

    ?>

    </table>

    <script>
        function checkdelete() {
            return confirm('Are you sure you want to delete this record?');
        }
    </script>