<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>
</head>
<body>
@include('menu')
<h1>Sign in</h1>
<form action="/signin">
    <label>Login
        <input type="text">
    </label><br>
    <label>Password
        <input type="password">
    </label><br>
    <label>Remember me
        <input type="checkbox">
    </label><br>
    <input type="submit" value="Sign in">
</form>
</body>
</html>
