<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Dashboard</title>
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
        .patient-list {
            list-style-type: none;
            padding: 0;
        }
        .patient-item {
            background: #f4f4f4;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .patient-item h3 {
            margin: 0;
        }
        .form-container {
            margin-top: 20px;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Receptionist Dashboard</h1>
        </div>
        <ul class="patient-list">
            @foreach ($patients as $patient)
                <li class="patient-item">
                    <h3>{{ $patient->name }}</h3>
                    <p>Queue: {{ $patient->queue->name }}</p>
                    <p>Room Number: {{ $patient->room_number }}</p>
                    <!-- Other patient details as needed -->
                </li>
            @endforeach
        </ul>
        <div class="form-container">
            <form action="{{ route('receptionist.assignRoom', ['patientId' => $patient->id]) }}" method="POST">
                @csrf
                <label for="room_number">Assign Room:</label>
                <input type="text" id="room_number" name="room_number" placeholder="Room Number">
                <button type="submit">Assign</button>
            </form>
        </div>
        <div class="footer">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
