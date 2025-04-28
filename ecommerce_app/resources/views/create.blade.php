<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="form-horizontal" method ="post" action="create">

    @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">email</label>
            <input type="text" id="email" name="email" required>
            @error('email')
                <div style="color: red;">{{ $message }}</div>
                
            @enderror
        </div>

        <div>
            <label for="password">password</label>
            <input type="text" id="password" name="password" required>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>


    </form>
</body>

</html>