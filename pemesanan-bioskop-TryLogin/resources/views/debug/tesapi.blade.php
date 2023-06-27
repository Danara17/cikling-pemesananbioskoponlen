<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
</head>
<body>
    <h1>Daftar Film</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="Poster Film">
            <h2>{{ $movie['title'] }}</h2>
            <p>{{$movie['overview']}}</p>
        </li>
        @endforeach
    </ul>
</body>
</html>
