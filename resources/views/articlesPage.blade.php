<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ucfirst($categoryName) }}</title>
</head>
<body>
@include('menu')
<h1>Articles | {{ ucfirst($categoryName) }}</h1>
<ul>
    @foreach($articles as $articleIdx => $article)
        <li><a href="/categories/{{ $categoryName }}/{{ $articleIdx }}">{{ $article['title'] }}</a></li>
    @endforeach
</ul>
</body>
</html>
