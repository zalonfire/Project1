<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <button type="submit">Logout</button>
    </div>
</form>

</body>
</html>
