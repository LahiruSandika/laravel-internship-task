@extends('layouts.app')

@section('content')
<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ $product->name }}"><br><br>
    Description: <textarea name="description">{{ $product->description }}</textarea><br><br>
    Price: <input type="number" step="0.01" name="price" value="{{ $product->price }}"><br><br>

    Category:
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <br><br>
    <button type="submit">Update</button>
</form>
@endsection
