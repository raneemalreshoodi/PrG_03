
<!-- resources/views/clients/edit.blade.php -->
<h1>Edit Client</h1>
<form action="{{ route('clients.update', $client) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $client->title }}" required>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image">
    <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->title }}" width="100">

    <label for="description">Description:</label>
    <textarea id="description" name="description" required>{{ $client->description }}</textarea>

    <button type="submit">Update</button>
</form>