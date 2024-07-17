<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: grid;
    grid-template-areas: 
        "logo manager"
        "reports feedback"
        "power settings";
    grid-gap: 20px;
    width: 300px;
}

.logo {
    grid-area: logo;
    border: 2px solid black;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.manager {
    grid-area: manager;
    border: 2px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
}

.power {
    grid-area: power;
    display: flex;
    justify-content: center;
    align-items: center;
}

.settings {
    grid-area: settings;
    display: flex;
    justify-content: center;
    align-items: center;
}

.reports {
    grid-area: reports;
    border: 2px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
}

.feedback {
    grid-area: feedback;
    border: 2px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
}

<body>
    <div class="container">
        <div class="logo">Logo</div>
        <div class="manager">Manager</div>
        <div class="power"><img src="power_icon.png" alt="Power"></div>
        <div class="settings"><img src="settings_icon.png" alt="Settings"></div>
        <div class="reports">Reports</div>
        <div class="feedback">User Feedback</div>
    </div>
</body>
</html>
