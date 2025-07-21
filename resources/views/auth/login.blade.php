<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>

    @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>

    <p><a href="{{ route('register') }}">Register here</a></p>
</body>
</html>
