<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        
        /* Added styles for header and footer */
        .header {
            background-color: #8B0000;
            color: black;
            text-align: center;
            padding: 10px 0;
        }
        .sub-header {
            color: yellow;
            margin-top: 5px; /* Adjusted margin */
            margin-bottom: 5px; /* Adjusted margin */
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: auto; /* Push footer to the bottom */
        }

        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-text {
            float: left;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Tech<span style="color: black;">Mak</span></h1>
        <p class="sub-header" style="color: #FFFFED;">The Technology Makers</p>
    </div>

    <div class="container">
        <h2>Registration</h2>
        <form action="../controller/registration_controller.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="name" placeholder="Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" value="Register">
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-text">TechMak</div>
        <p>Address: Road-1, House-61, Block-A, Bashundhara R/A</p>
        <p>Contact: 01601899738</p>
        <p>Email: techmak66@gmail.com</p>
        <div>
            <a href="#">EMI Terms</a>
            <a href="#">Privacy Policy</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Online Delivery</a>
        </div>
    </div>
</body>
</html>
