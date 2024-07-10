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
        <form method="POST" action="/get_queue_details">
            @csrf
            <div class="button">
                <select id="service_dropdown">
                    <option selected disabled>Select a service</option>
                    <option value="general_doctor">see general doctor</option>
                    <option value="optician">See optician</option>
                    <option value="psychologist">See psychologist</option>
                </select>
            </div> <br> <br>
            <input type="text" id="service" name="service" hidden>
            <input type="submit" value="Proceed" class="button">
        </form>
    </div>
</body>
<script>
    const dropDownElement = document.getElementById("service_dropdown");
    const serviceElement = document.getElementById("service");
    dropDownElement.addEventListener('change', function (){
        serviceElement.value = dropDownElement.value;
    });
</script>
</html>
