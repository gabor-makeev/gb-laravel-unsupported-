<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article['title'] }}</title>
</head>
<body>
@include('menu')
<h1>{{ $article['title'] }}</h1>
<p>{{ $article['content'] }}</p>
</body>
</html>
