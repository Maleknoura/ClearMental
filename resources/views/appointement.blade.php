{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form action="{{ route('reservation.store') }}" method="POST">
            @csrf
            {{-- <input type="hidden" name="coachId" value="{{ $coachId }}"> --}}
            {{-- <input type="hidden" name="appointment_date" value="{{ $appointment_date }}">
            <label for="selected_hour">Choisissez l'heure de votre rendez-vous :</label>
            <select name="selected_hour" id="selected_hour">
                @foreach($available_hours as $hour)
                    <option value="{{ $hour }}">{{ $hour }}</option>
                @endforeach
            </select>
            <button type="submit">Réserver</button>
        </form>
</div>
</body>
</html> --}} 