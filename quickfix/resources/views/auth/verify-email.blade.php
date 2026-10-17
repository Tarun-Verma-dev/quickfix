
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email | QuickFix</title>
</head>
<body style="font-family:Arial;background:#f3f6fb;padding:40px 16px">
<div style="max-width:480px;margin:40px auto;background:white;padding:30px;border-radius:12px">
    <h1>Verify your email</h1>
    <p>Please click the verification link sent to your email address before continuing.</p>

    @if (session('status') === 'verification-link-sent')
        <p style="color:green">A new verification link has been sent to your email.</p>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" style="padding:12px;width:100%">
            Resend verification email
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" style="margin-top:15px">
        @csrf
        <button type="submit" style="padding:12px;width:100%">
            Log out
        </button>
    </form>
</div>
</body>
</html>
