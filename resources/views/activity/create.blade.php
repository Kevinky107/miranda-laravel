<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Activity</title>
    <link rel="stylesheet" href="{{ asset('css/createActivity.css') }}">
</head>
<body>
    <h1>Create a New Activity</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf

        <div>
            <label for="type">Type of Activity</label>
            <select name="type" id="type" required>
                <option value="surf">Surf</option>
                <option value="windsurf">Windsurf</option>
                <option value="kayak">Kayak</option>
                <option value="atv">ATV</option>
                <option value="hot air balloon">Hot Air Balloon</option>
            </select>
        </div>

        <div>
            <label for="date">Date and Time</label>
            <input type="datetime-local" name="date" id="date" required>
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea name="notes" id="notes"></textarea>
        </div>

        <div>
            <button type="submit">CREATE</button>
        </div>
    </form>
</body>
</html>
</html>