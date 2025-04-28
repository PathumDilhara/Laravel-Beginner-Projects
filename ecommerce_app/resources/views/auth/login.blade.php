<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }

        .form-container div {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
        }

        label {
            font-weight: bold;
            width: 150px;
        }
    </style>
</head>

<body>
    <form class="form-container" method="post" action="{{route("login.post")}}">
        @csrf
        <div>
            <h1>
                <h2>Login</h2>
            </h1>
        </div>
        <div>
            <label for="email" style="font-weight: bold;">email</label>
            <input type="text" name="email" id="email">
        </div>
        @error('email')
            <span class="text-danger" style="color: red; font-size: small;">{{ $message }}</span>
        @enderror

        <div>
            <label for="password" style="font-weight: bold;">password</label>
            <input type="text" name="password" id="password">
        </div>
        @error('password')
            <span class="text-danger" style="color: red; font-size: small;">{{ $message }}</span>
        @enderror

        <div>
            <button type="submit" style="color: white; background-color: blue;">login</button>
        </div>

        @if(session("success"))
            <div style="color: green;">
                {{ session("success") }}
            </div>
        @endif
    </form>
</body>

</html>