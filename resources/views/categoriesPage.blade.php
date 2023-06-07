<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
</head>
<body>
@include('menu')
<h1>Categories</h1>
<ul>
    @foreach($categories as $category)
    <li><a href="/categories/{{ $category }}">{{ ucfirst($category) }}</a></li>
    @endforeach
</ul>
</body>
</html>
