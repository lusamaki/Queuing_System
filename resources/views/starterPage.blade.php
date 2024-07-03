<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .button {
            background-color: #ffa24b;
            border: none;
            border-radius: 25px;
            padding: 15px 30px;
            font-size: 1em;
            color: #000;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .button select {
            border: none;
            background: transparent;
            font-size: 1em;
            color: #000;
            appearance: none;
            outline: none;
            padding-right: 15px;
        }
        .button:after {
            content: '▼';
            font-size: 0.8em;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's get you Started!!</h1>
        <div class="button">
            <select>
                <option selected disabled>Select A service</option>
                <option value="service1">Service 1</option>
                <option value="service2">Service 2</option>
                <option value="service3">Service 3</option>
            </select>
        </div>
    </div>
</body>
</html>
