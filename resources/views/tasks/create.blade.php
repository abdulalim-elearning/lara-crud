<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Enter a task</label>
        <input type="text" id="title" name="title" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>