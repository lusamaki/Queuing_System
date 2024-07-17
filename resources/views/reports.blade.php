<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
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
        .report-list {
            list-style-type: none;
            padding: 0;
        }
        .report-item {
            background: #f4f4f4;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .report-item h3 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Reports</h1>
        </div>
        <ul class="report-list">
            @foreach ($reports as $report)
                <li class="report-item">
                    <h3>{{ $report->title }}</h3>
                    <p>{{ $report->description }}</p>
                    <p>Created at: {{ $report->created_at->format('Y-m-d H:i:s') }}</p>
                </li>
            @endforeach
        </ul>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Reports</p>
        </div>
    </div>
</body>
</html>
