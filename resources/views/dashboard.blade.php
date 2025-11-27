<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang di Dashboard!</h1>

    @if(session('user'))
        <p>Login sebagai: {{ session('user')->username }} (Role: {{ session('user')->role }})</p>
    @endif

    <a href="{{ route('login') }}">Logout</a>
</body>
</html>
