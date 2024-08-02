<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form method="POST" action="{{ route('contacts.update', $contact) }}">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $contact->phone }}">
        <br>
        <label>Address:</label>
        <input type="text" name="address" value="{{ $contact->address }}">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
