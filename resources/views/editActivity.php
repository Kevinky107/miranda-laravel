<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
    <link rel="stylesheet" href="{{ asset('css/createActivity.css') }}">
</head>
<body>
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
                <option value="hot_air_balloon" {{ $activity->type == 'hot_air_balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
            </select>
        </div>

        <div>
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" id="user_id" value="{{ $activity->user_id }}" required>
        </div>

        <div>
            <label for="datetime">Date and Time</label>
            <input type="datetime-local" name="datetime" id="datetime" value="{{ $activity->datetime }}" required>
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
