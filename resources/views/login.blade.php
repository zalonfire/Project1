<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            max-width: 90%;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-input {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .login-btn:focus {
            outline: none;
        }

        .error-message {
            color: #ff0000;
            margin-top: 10px;
        }
        body {
    background: url('C:\laragon\www\project1\resources\images\pexels-sebastiaan9977-1097456 (1)') no-repeat center center fixed; 
    background-size: cover; 
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <h3>Welcome Back!</h3>
    <p>Please enter your credentials to log in.</p>
    <form action="#" method="POST">
        <input type="text" name="username" placeholder="Username" class="login-input" required>
        <input type="password" name="password" placeholder="Password" class="login-input" required>
        <button type="submit" class="login-btn">Login</button>
    </form>
    <div class="error-message"></div>
</div>





</body>
</html>
