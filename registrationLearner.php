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
        <h2>Learner Information</h2>
        
        <div class="form-group">
            <label for="learnerID" class="labels">Learner ID:</label> 
            <input type="text" id="learnerID" name="learnerID" required>
        </div>

        <div class="form-group">
            <label for="name" class="labels">Name (Learner):</label> 
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="guardianName" class="labels">Name (Guardian):</label> 
            <input type="text" id="guardianName" name="guardianName" required>
        </div>

        <div class="form-group">
            <label for="email" class="labels">E-Mail (Guardian):</label> 
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="cell" class="labels">Contacts (Guardian):</label> 
            <input type="integer" id="cell" name="cell" required>
        </div>



        <div class="form-group">
            <label for="role" class="labels">Class:</label> 
            <select id="role" name="role" required>
                <option selected disabled>Choose Class</option>
                <option>Guardian or Parent</option>
                <option>Learner</option>
                <option>Administrator</option>
            </select>
        </div>


        <div class="form-group">
            <label for="class" class="labels">Class:</label> 
            <select id="class" name="class" required>
                <option selected disabled>Choose Class</option>
                <option>10(A)</option>
                <option>10(B)</option>
                <option>10(C)</option>
                <option>11(A)</option>
                <option>11(B)</option>
                <option>11(C)</option>
                <option>12(A)</option>
                <option>12(B)</option>
                <option>12(C)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status" class="labels">Status:</label> 
            <select id="status" name="status" required>
                <option selected disabled>Choose Status</option>
                <option>New Learner</option>
                <option>Current Learner</option>
            </select>
        </div>

        <div class="form-group">
            <label for="location" class="labels">Location:</label> 
            <select id="location" name="location" required>
                <option selected disabled>Choose Location</option>
                <option>Rooihuiskraal</option>
                <option>Wierdapark</option>
                <option>Centurion</option>
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