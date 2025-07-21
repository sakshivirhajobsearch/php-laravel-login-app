<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <h2>Register</h2>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input name="name" placeholder="Name" required><br>
        <input name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>

    <p><a href="{{ route('login') }}">Back to Login</a></p>
</body>
</html>
