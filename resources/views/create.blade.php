<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
</head>
<body>
    <h1>Create Contact</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone">
        <br>
        <label>Address:</label>
        <input type="text" name="address">
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
