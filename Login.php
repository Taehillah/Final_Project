<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strive High Secondary School</title>
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
            margin-top: 70px;
        }
        form {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(15px);
            width: 100%;
            max-width: 500px;
            margin: auto;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            transition: 0.3s;
        }
        h2 {
            color: #fff;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            margin-bottom: 15px;
        }
        .labels {
            font-weight: 600;
            color: #fff;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            height: 50px;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 30px;
            color: #fff;
            font-size: 20px;
            padding: 0 0 0 45px;
            background: rgba(255, 255, 255, 0.1);
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .toggle-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .toggle-buttons button {
            margin: 0 10px;
            background-color: #007bff;
            border-radius: 30px;
        }
        .toggle-buttons button.active {
            background-color: #0056b3;
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
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="LearnerReg.php">Registration(Learner)</a></li>
                    <li><a href="AdminReg.php">Registration(Admin)</a></li>
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
    <div class="center"><h2 style="color: white;">LOGIN PAGE</h2></div>
    <div class="content">
        <div class="toggle-buttons">
            <button id="learnerLoginBtn" class="active" onclick="showLearnerLogin()">Learner/Guardian Login</button>
            <button id="adminLoginBtn" onclick="showAdminLogin()">Administrator Login</button>
        </div>
        <form id="learnerLoginForm" action="LeanerLogin.php" method="post">
            <h2>Learner/Guardian Login</h2>
            <div class="form-group">
                <label for="learnerEmailOrContact" class="labels">Email or Contact Number:</label>
                <input type="text" id="learnerEmailOrContact" name="emailOrContact" required>
            </div>
            <div class="form-group">
                <label for="learnerPassword" class="labels">Password:</label>
                <input type="password" id="learnerPassword" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <form id="adminLoginForm" action="AdminLogin.php" method="post" style="display: none;">
            <h2>Administrator Login</h2>
            <div class="form-group">
                <label for="adminEmailOrContact" class="labels">Email or Contact Number:</label>
                <input type="text" id="adminEmailOrContact" name="emailOrContact" required>
            </div>
            <div class="form-group">
                <label for="adminPassword" class="labels">Password:</label>
                <input type="password" id="adminPassword" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script>
        function showLearnerLogin() {
            document.getElementById('learnerLoginForm').style.display = 'block';
            document.getElementById('adminLoginForm').style.display = 'none';
            document.getElementById('learnerLoginBtn').classList.add('active');
            document.getElementById('adminLoginBtn').classList.remove('active');
        }
        function showAdminLogin() {
            document.getElementById('learnerLoginForm').style.display = 'none';
            document.getElementById('adminLoginForm').style.display = 'block';
            document.getElementById('learnerLoginBtn').classList.remove('active');
            document.getElementById('adminLoginBtn').classList.add('active');
        }
    </script>
</body>
</html>