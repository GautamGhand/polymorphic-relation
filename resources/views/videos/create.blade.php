<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('videos.store') }}">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <label>Tag</label>
        <input type="text" name="tag">
        <input type="submit" name="submit" value="Create">
    </form> 
</body>
</html>