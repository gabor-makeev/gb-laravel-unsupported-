<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create article</title>
</head>
<body>
@include('menu')
<h1>Sign in</h1>
<form action="/create">
    <label>Title
        <input type="text">
    </label><br>
    <label>Description
        <textarea></textarea>
    </label><br>
    <label>Short description
        <textarea></textarea>
    </label><br>
    <label>Category
        <select>
            <option>Sports</option>
            <option>Video games</option>
            <option>Movies</option>
            <option>Tech</option>
            <option>Memes</option>
        </select>
    </label><br>
    <input type="submit" value="Create">
</form>
</body>
</html>
