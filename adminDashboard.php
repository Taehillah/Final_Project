<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: adminLogin.php");
    exit();
}

$admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strive High Secondary School - Admin Dashboard</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('images/bk2.jpg');
            margin: 0;
            padding-top: 60px; /* space for the fixed navbar */
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #434242;
            padding: 30px 10px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .navbar .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        #logo {
            height: 80px;
            width: 300px;
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar ul li {
            position: relative;
        }
        .navbar ul li a {
            color: white;
            text-decoration: none;
            padding: 20px 40px;
            display: block;
        }
        .navbar ul li a:hover,
        .navbar ul li a:focus {
            background-color: #555;
        }
        .navbar ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #333;
            min-width: 200px;
            z-index: 1000;
        }
        .navbar ul li ul li a {
            padding: 10px;
        }
        .navbar ul li:hover > ul,
        .navbar ul li:focus-within > ul {
            display: block;
        }
        .content {
            padding: 20px;
        }
        .center {
            max-width: 500px;
            margin: auto;
            margin-top: 100px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo"><img id="logo" src="images/logoFIN.png" alt=""></div>
        <ul>
            <li><a href="#">Home</a>
                <ul>
                    <li><a href="#">Welcome Message</a></li>
                    <li><a href="adminDashboard.php">Admin Dashboard</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
            <li><a href="#">Dashboard</a>
                <ul>
                    <li><a href="#">Bus Routes</a></li>
                    <li><a href="#">Register Bus Route</a></li>
                    <li><a href="#">View Existing Registrations</a></li>
                </ul>
            </li>
            <li><a href="#">Admin Panel</a>
                <ul>
                    <li><a href="#">Manage Bus Routes and Schedule</a></li>
                    <li><a href="#">View All Registrations</a></li>
                    <li><a href="#">Generate Reports</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="center">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>Admin: <?php echo htmlspecialchars($admin['First_Names']) . ' ' . htmlspecialchars($admin['Surname']); ?></p>
        <p>Role: <?php echo htmlspecialchars($admin['Role']); ?></p>
    </div>
</body>
</html>