
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | QuickFix</title>
</head>
<body style="font-family:Arial;background:#f3f6fb;padding:40px 16px">
<div style="max-width:420px;margin:40px auto;background:white;padding:30px;border-radius:12px">
    <h1>Forgot password?</h1>
    <p>Enter your email address and we’ll send you a password-reset link.</p>

    @if (session('status'))
        <p style="color:green">{{ session('status') }}</p>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label for="email">Email address</label><br>
        <input id="email" type="email" name="email"
               value="{{ old('email') }}" required autocomplete="email"
               style="width:100%;padding:12px;margin:10px 0">
        <button type="submit" style="padding:12px;width:100%">Send reset link</button>
    </form>

    <p><a href="{{ route('login') }}">Back to login</a></p>
</div>
</body>
</html>
