@extends('layout')

@section('content')
<h1>Edit Item</h1>
<form action="{{ route('items.update', $item) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $item->name }}" required>
    <label for="description">Description:</label>
    <textarea name="description" required>{{ $item->description }}</textarea>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" value="{{ $item->quantity }}" required>
    <button type="submit">Update</button>
</form>
@endsection