<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show single car page</h1>

    <div, style="color: {{$car->color}}">
        <h2>{{$car->name}}</h2>
    </div>

    <p style="color: black">
        {{$car->company}}
    </p>

    <a href="{{$car->id}}/edit">Edit info</a>
</body>
</html>