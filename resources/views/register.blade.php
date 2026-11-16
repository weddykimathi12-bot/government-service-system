
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Government Service Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f4;
            padding: 40px 15px;
        }
        .box {
            max-width: 420px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 12px #0001;
        }
        h1 { text-align: center; color: #168044; }
        label { display: block; margin-top: 15px; }
        input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            margin-top: 6px;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 22px;
            background: #168044;
            color: white;
            border: none;
            cursor: pointer;
        }
        a { color: #168044; }
        .error { color: #b91c1c; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Create Account</h1>
        <p>Register to use government services.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <label for="name">Full Name</label>
            <input id="name" type="text" name="name"
                   value="{{ old('name') }}" required>

            <label for="email">Email Address</label>
            <input id="email" type="email" name="email"
                   value="{{ old('email') }}" required>

            <label for="password">Password (minimum 8 characters)</label>
            <input id="password" type="password"
                   name="password" minlength="8" required>

            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password"
                   name="password_confirmation" minlength="8" required>

            <button type="submit">Register</button>
        </form>

        <p>Already registered? <a href="{{ route('login') }}">Login</a></p>
        <p><a href="{{ route('home') }}">Back to Home</a></p>
    </div>
</body>
</html>
