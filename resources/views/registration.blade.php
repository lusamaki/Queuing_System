<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin: 10px 0;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #ff8c42;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #ff7b1a;
        }

        .form {
            margin-top: 20px;
            font-size: 14px;
        }

        .form a {
            color: #ff8c42;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .shape {
            width: 200px;
            height: 200px;
            background-color: #ff8c42;
            border-radius: 50%;
            position: absolute;
        }

        .shape:first-child {
            top: -50px;
            left: -50px;
        }

        .shape:last-child {
            bottom: -50px;
            right: -50px;
        }

        .social {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .social div {
            width: 45%;
            padding: 10px;
            background: #eee;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
        }

        .social div:hover {
            background: #ddd;
        }

        .social .fab {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form method="POST" action="/save_user">
        @csrf
        <h3>Register</h3>
        <p>Already Registered? <a href="/login">Log in here.</a></p>
    
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" id="username" required>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password" required>

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" required>

        <button type="submit">Sign up</button>
    </form>
</body>
</html>
