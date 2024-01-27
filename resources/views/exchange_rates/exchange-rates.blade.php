<!DOCTYPE html>
<html>

<head>
    <title>Fluctuations</title>
</head>

<body>
    <h1>Fluctuations</h1>

    <ul>
        @foreach($fluctuations as $date => $fluctuation)
        <li>{{ $date }}: {{ $fluctuation }}</li>
        @endforeach
    </ul>
</body>

</html>