<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <h1>the result</h1>
    <ul>
        @foreach($test as $test)
            <li>{{ $test -> test_ID }}</li>
        @endforeach
    </ul>
</body>
</html>