<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit car page</h1>

    <form class="form-horizontal" method="post" action="update">
        
        @csrf
        @method('put')

        <div>
            <label for="name"> Car Name : </label>
            <input type="text" id="name" name="name" value="{{$car->name}}" required>
        </div>

        <div>
            <label for="color">Color : </label>
            <input type="text" id="color" name="color" value="{{$car->color}}" required>
        </div>

        <div>
            <label for="company">Company</label>
            <input type="text" id="company" name="company" value="{{$car->company}}" required>
        </div>

        <div>
            <button type="submit">update</button>
        </div>
</body>
</html>