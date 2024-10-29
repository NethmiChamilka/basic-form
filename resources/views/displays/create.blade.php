<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save User</title>
</head>
<body>
    <h1>Save a New User</h1>
    <form action="{{ route('displays.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
