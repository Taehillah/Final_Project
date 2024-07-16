<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strive High Secondary School</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #333;
            margin: 0;
            padding-top: 60px; /* space for the fixed navbar */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
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

        #logo{
            height:60px;
            width: 240px;
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

        .center{
            max-width: 500px;
            margin:  auto;
            margin-top: 70px;
        }

        form {
            background: #444746;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        h2 {
            color: #fff;
            margin-bottom: 15px;
        }

        .labels {
            font-weight: 600;
            color: #fff;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="integer"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    </style>
</head>
<body>
    <div class="navbar">
        <div  class="logo"><img id="logo" src="images/logoFIN.png" alt=""></div>
        <ul>
            <li><a href="#">Home</a>
                <ul>
                    <li><a href="#">Welcome Message</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Registration</a></li>
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
    <div class="center"><h1 style="color: white;">REGISTRATION</h1></div>
    <div class="content">
        <!-- Registration page for administrators -->

        
        <form action="register.php" method="post" onsubmit="return validateForm()">
            
            <h2>Administrator Information</h2>
            
            <div class="form-group">
                <label for="adminID" class="labels">Admin ID:</label> 
                <input type="text" id="adminID" name="adminID" required>
            </div>
    
            <div class="form-group">
                <label for="firstname" class="labels">First Names:</label> 
                <input type="text" id="firstname" name="firstname" required>
            </div>
    
            <div class="form-group">
                <label for="lastName" class="labels">Surname:</label> 
                <input type="text" id="lastName" name="lastName" required>
            </div>
    
            <div class="form-group">
                <label for="email" class="labels">E-Mail:</label> 
                <input type="email" id="email" name="email" required>
            </div>
    
            <div class="form-group">
                <label for="cell" class="labels">Contacts:</label> 
                <input type="integer" id="cell" name="cell" required>
            </div>
    
            <div class="form-group">
                <label for="role" class="labels">Role:</label> 
                <select id="role" name="role" required>
                    <option selected disabled>Choose Role</option>
                    <option>Administrator</option>
                    <option>Guardian or Parent</option>
                    <option>Learner</option>
                </select>
            </div>
    
            <button type="submit">Register</button>
        </form>
   

    <script>
        function validateForm() {
            var cell = document.getElementById("cell").value;
            if (isNaN(cell)) {
                alert("Please enter a valid contact number.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>