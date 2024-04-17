<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Coach Profile</title>
</head>
<body>
    <div class="container">
        <h1>Coach Profile</h1>
        <p><strong>Name:{{  $coach->user->name }}</p>
        <p><strong>Email: {{ $coach->user->email  }}</p>
            <form id="favorite-form" action="{{ route('favorites.toggle', $coach->id) }}" method="POST">
                @csrf
                <button type="submit" onclick="event.preventDefault(); toggleHeartIcon(); document.getElementById('favorite-form').submit();">
                    <i id="heart-icon" class="bx {{ $coach->isFavoritedBy(auth()->user()) ? 'bx-heart-full' : 'bx-heart' }}"></i>
                </button>
            </form>

    </div>
    <form action="{{ route('reservation.store') }}" method="POST">
        @csrf
        <input type="hidden" name="coach_id" value="{{ $coach->id }}">
        <input type="hidden" name="appointment_date" value="{{ $appointment_date }}">
        <label for="selected_hour">Choisissez l'heure de votre rendez-vous :</label>
        <select name="selected_hour" id="selected_hour">
            @foreach ($availableHours as $hour)
                <option value="{{ $hour }}">{{ $hour }}:00</option>
            @endforeach
        </select>
        <button type="submit">Réserver</button>
    </form>
    <script>
        
        function toggleHeartIcon() {
        var heartIcon = document.getElementById('heart-icon');
        if (heartIcon.classList.contains('bx-heart')) {
            heartIcon.classList.remove('bx-heart');
            heartIcon.classList.add('bx-heart-full');
        } else {
            heartIcon.classList.remove('bx-heart-full');
            heartIcon.classList.add('bx-heart');
        }
    }
    </script>
</body>
</html>