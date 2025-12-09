<h1>Add Category</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Category name" required>
    <button type="submit">Save</button>
</form>
