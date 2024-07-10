<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9fe;
            color: #333;
        }

        header {
            background-color: #3f51b5;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 0;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        .services ul {
            list-style: none;
            padding: 0;
        }

        .services li {
            display: inline-block;
            margin-right: 20px;
        }

        .services a {
            color: #333;
            text-decoration: none;
        }

        .queue-status {
            background-color: #e8f0fe;
            padding: 15px;
        }

        .queue-status .label {
            font-weight: bold;
        }

        .queue-status .value {
            font-style: italic;
        }

        .leaveQueueButton {
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .leaveQueueButton:hover {
            background-color: #c9302c;
        }

        .feedback {
            background-color: #f5f5f5;
            padding: 15px;
        }

        .feedback textarea {
            width: 100%;
            resize: vertical;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .feedback button {
            background-color: #3f51b5;
            color: #fff;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Patient Dashboard</h1>
        <p>Welcome, {{ Session::get('user.username') }}</p>
    </header>

    <main>
        <section class="services">
            <h2>Services</h2>
            <ul>
                <li><a href="#">General Doctor</a></li>
                <li><a href="#">Optician</a></li>
                <li><a href="#">Psychologist</a></li>
            </ul>
        </section>

        <section class="queue-status">
            <h2>Queue Status</h2>
            <p>
                <span class="label">Position:</span>
                <span class="value"> {{ $nb_patients }} </span>
            </p>
            <p>
                <span class="label">Service:</span>
                <span class="value"> {{ $service }} </span>
            </p>
            <p>
                <span class="label">Estimated Wait Time:</span>
                <span class="value"> {{ $estimated_waiting_time }} mins</span>
            </p>
            <button class="leaveQueueButton">Leave Queue</button>
        </section>

        <section class="feedback">
            <h2>Give Your Feedback</h2>
            <form action="#">
                <div class="form-group">
                    <label for="feedbackTextarea">Enter your feedback:</label>
                    <textarea id="feedbackTextarea" rows="5" placeholder="Type your feedback here..."></textarea>
                </div>
                <button class="leaveQueueButton" type="submit">Submit Feedback</button>
            </form>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>
