
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | QuickFix</title>
</head>
<body style="font-family:Arial;background:#f3f6fb;padding:40px 16px">
<div style="max-width:420px;margin:40px auto;background:white;padding:30px;border-radius:12px">
    <h1>Reset password</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <label for="email">Email address</label><br>
        <input id="email" type="email" name="email"
               value="{{ old('email', $request->email) }}" required
               autocomplete="email" style="width:100%;padding:12px;margin:10px 0">

        <label for="password">New password</label><br>
        <input id="password" type="password" name="password"
               required autocomplete="new-password"
               style="width:100%;padding:12px;margin:10px 0">

        <label for="password_confirmation">Confirm new password</label><br>
        <input id="password_confirmation" type="password"
               name="password_confirmation" required autocomplete="new-password"
               style="width:100%;padding:12px;margin:10px 0">

        <button type="submit" style="padding:12px;width:100%">Reset password</button>
    </form>
</div>
</body>
</html>
