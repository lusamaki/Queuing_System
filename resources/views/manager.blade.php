<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
        }
        .card {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: background 0.3s;
        }
        .card:hover {
            background: #e4e4e4;
        }
        .square {
            width: 50px;
            height: 50px;
            background-color: #36a2eb;
            margin: 0 auto 10px auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Manager Dashboard</h1>
        </div>
        <div class="grid-container">
            <div class="card">
                <div class="square"></div>
                <h3>View Reports</h3>
            </div>
            <div class="card">
                <div class="square"></div>
                <h3>View Queue</h3>
            </div>
            <div class="card">
                <div class="square"></div>
                <h3>View Patients’ Info</h3>
            </div>
            <div class="card">
                <div class="square"></div>
                <h3>View User Feedback</h3>
            </div>
            <div class="card">
                <div class="square"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Manager Dashboard</p>
        </div>
    </div>
</body>
</html>
