
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | QuickFix</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; font-family: Arial, sans-serif;
            background: #f3f6fb; min-height: 100vh;
            display: grid; place-items: center; padding: 20px;
        }
        .card {
            background: white; width: 100%; max-width: 440px;
            padding: 32px; border-radius: 14px;
            box-shadow: 0 8px 30px #00000012;
        }
        h1 { margin: 0 0 8px; color: #172554; }
        p { color: #64748b; }
        label { display: block; margin: 16px 0 7px; }
        input {
            width: 100%; padding: 12px;
            border: 1px solid #cbd5e1; border-radius: 7px;
        }
        button {
            width: 100%; margin-top: 22px; padding: 13px;
            background: #2563eb; color: white; border: 0;
            border-radius: 7px; cursor: pointer;
        }
        a { color: #2563eb; text-decoration: none; }
        .error { color: #dc2626; font-size: 14px; }
        .links { margin-top: 18px; text-align: center; }
    </style>
</head>
<body>
<div class="card">
    <h1>Create account</h1>
    <p>Join QuickFix to get started.</p>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Full name</label>
        <input id="name" type="text" name="name"
               value="{{ old('name') }}" required autocomplete="name">

        <label for="email">Email address</label>
        <input id="email" type="email" name="email"
               value="{{ old('email') }}" required autocomplete="username">

        <label for="password">Password</label>
        <input id="password" type="password" name="password"
               required autocomplete="new-password">

        <label for="password_confirmation">Confirm password</label>
        <input id="password_confirmation" type="password"
               name="password_confirmation" required autocomplete="new-password">

        <button type="submit">Create account</button>
    </form>

    <div class="links">
        Already have an account? <a href="{{ route('login') }}">Log in</a>
    </div>
</div>
</body>
</html>
