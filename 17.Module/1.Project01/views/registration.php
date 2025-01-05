<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .registration-form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .registration-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }
        .registration-form label {
            font-size: 14px;
            color: #555;
        }
        .registration-form input[type="text"],
        .registration-form input[type="password"],
        .registration-form input[type="tel"],
        .registration-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .registration-form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .registration-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        <h2>Register</h2>

        <?php $Base_Url = "/EDGE-RUET-CSE-RUETCSEB0106/17.Module/1.Project01"?>

        <form action= "<?php echo $Base_Url. "/creatuser"; ?>" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number"  required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
            
            <button type="submit">Register</button>
        </form>


    </div>
</body>
</html>