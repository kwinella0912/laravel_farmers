<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello world! 

    @foreach ($campuses as $item)
    <p>{{$item-> code}} - {{$item -> description}} - {{$item -> created_at}} </p>

    @endforeach
</body>
</html>