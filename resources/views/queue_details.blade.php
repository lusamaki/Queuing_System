<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Doctor Selected!</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            background-color: #f8f0e6;
        }

        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fef1e6;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #c0392b;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #805940;
        }

        #joinQueueButton {
            padding: 10px 20px;
            background-color: #c0392b;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        #joinQueueButton:hover {
            background-color: #a83220;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>You've selected {{ $service == "Optician" ? "an" : "a" }} {{ $service }} !</h1>
        <p>Number of people already in the queue: {{ $nb_patients }}</p>
        <form method="POST" action="queue_view">
            @csrf
            <input type="text" name="service" value="{{ $service }}" hidden>
            <button type="submit" id="joinQueueButton"> Join Queue </a> </button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
