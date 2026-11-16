
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Government Service Request System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f4;
            margin: 0;
            padding: 40px 15px;
        }

        .login-box {
            max-width: 400px;
            margin: 30px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 12px #0001;
        }

        h1 {
            text-align: center;
            color: #168044;
        }

        label {
            display: block;
            margin-top: 15px;
        }

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

        a {
            color: #168044;
        }

        .error {
            color: #b91c1c;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>
        <p>Sign in to your account.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <label for="email">Email Address</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            <label for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >

            <button type="submit">Login</button>
        </form>

        <p>Don't have an account?
            <a href="{{ route('register') }}">Register here</a>
        </p>

        <p><a href="{{ route('home') }}">Back to Home</a></p>
    </div>
</body>
</html>
