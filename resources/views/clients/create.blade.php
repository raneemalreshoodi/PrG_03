
<!-- resources/views/clients/create.blade.php -->
<h1>Create Client</h1>
<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <button type="submit">Create</button>
</form>
