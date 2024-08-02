<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
</head>
<body>
    <h1>Contacts</h1>

    <form method="GET" action="{{ route('contacts.index') }}">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or email">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('contacts.create') }}">Create New Contact</a>

    <table>
        <thead>
            <tr>
                <th><a href="{{ route('contacts.index', ['sort_by' => 'name', 'sort_order' => request('sort_order', 'asc') == 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact) }}">View</a>
                        <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->appends(request()->query())->links() }}
</body>
</html>
