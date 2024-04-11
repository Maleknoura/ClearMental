<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach Profile</title>
</head>
<body>
    <div class="container">
        <h1>Coach Profile</h1>
        <p><strong>Name:{{ $coach->name}}</p>
        <p><strong>Email: {{ $coach->email }}</p>
    </div>
    <form action="{{ route('reservation.store') }}" method="POST">
        @csrf
        <input type="hidden" name="coach_id" value="{{ $coach->coach->id }}">
        <input type="hidden" name="appointment_date" value="{{ $appointment_date }}">
        <label for="selected_hour">Choisissez l'heure de votre rendez-vous :</label>
        <select name="selected_hour" id="selected_hour">
            @foreach ($availableHours as $hour)
                <option value="{{ $hour }}">{{ $hour }}:00</option>
            @endforeach
        </select>
        <button type="submit">Réserver</button>
    </form>
    
</body>
</html>