<!-- resources/views/clients/index.blade.php -->
<h1>Clients</h1>
<a href="{{ route('clients.create') }}">Create New Client</a>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{ $client->title }}</td>
            <td><img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->title }}" width="100"></td>
            <td>{{ $client->description }}</td>
            <td>
                <a href="{{ route('clients.edit', $client) }}">Edit</a>
                <form action="{{ route('clients.destroy', $client) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
