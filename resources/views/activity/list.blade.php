<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="{{ asset('css/createActivity.css') }}">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #111827;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }

        ol {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
            background-color: #1F2937;
            padding: 20px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        ul {
            padding-left: 20px;
            background-color: 
        }

        li {
            margin-bottom: 10px;
            list-style: none;
        }

        #id {
            text-align: center;
            margin-bottom: 0.2em;
            color: white;
            font-weight: 600;
        }

        li:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <h1>My Activities</h1>
    @foreach ($activities as $activity)
        <ol>
            <div id="id">Activity {{ $activity['id']}}</div>
            <ul>
                <li>Type: {{ $activity['type']}}</li>
                <li>Date: {{ $activity['date']}}</li>
                <li>Paid: {{ $activity['paid'] == 0 ? "No" : "Yes"}}</li>
                @if ($activity->notes)
                    <li>Notes: {{ $activity['notes']}}</li>
                @endif
                @if ($activity->satisfaction)
                    <li>Satisfaction: {{ $activity['satisfaction']}}</li>
                @endif
            </ul>
        </ol>
    @endforeach
</body>
</html>