<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strive High Secondary School - Learner Registration</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            color: #444;
            margin-bottom: 15px;
        }

        .labels {
            font-weight: 600;
            color: #555;
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
    <form action="register.php" method="post" onsubmit="return validateForm()">
        <h1>Strive High Secondary School</h1>
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