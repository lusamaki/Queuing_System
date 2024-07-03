<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .feedback-container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button, .comment-box {
            background-color: #ffa65c;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            margin: 10px 0;
            cursor: pointer;
            font-size: 16px;
        }
        .comment-box {
            width: 100%;
            height: 100px;
            resize: none;
            border-radius: 10px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <h1>Your Feedback!!</h1>
        <button class="button">Your Feedback!!</button>
        <img src="https://via.placeholder.com/150" alt="Feedback Icon" style="margin: 20px 0;">
        <textarea class="comment-box" placeholder="Type your Comment Here!!!"></textarea>
    </div>
</body>
</html>
