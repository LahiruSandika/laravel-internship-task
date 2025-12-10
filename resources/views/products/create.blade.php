@extends('layouts.app')

@section('content')
<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    Name: <input type="text" name="name"><br><br>
    Description: <textarea name="description"></textarea><br><br>
    Price: <input type="number" step="0.01" name="price"><br><br>

    Category:
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <br><br>
    <button type="submit">Save</button>
</form>
@endsection
