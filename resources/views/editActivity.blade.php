<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
    <link rel="stylesheet" href="{{ asset('css/createActivity.css') }}">
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Edit Activity</h1>

    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="type">Type of Activity</label>
            <select name="type" id="type" required>
                <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
                <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
                <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
                <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
            </select>
        </div>

        <div>
            <label for="date">Date and Time</label>
            <input type="datetime-local" name="date" id="date" value="{{ $activity->date }}" required>
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea name="notes" id="notes">{{ $activity->notes }}</textarea>
        </div>

        <div>
            <label for="paid">Paid</label>
            <input type="checkbox" name="paid" id="paid" {{ $activity->paid ? 'checked' : '' }}>
        </div>

        <div>
            <label for="satisfaction">Satisfaction</label>
            <input type="range" name="satisfaction" id="satisfaction" value="{{ $activity->satisfaction }}" min="0" max="10">
        </div>
            
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
