@extends('layout')

@section('content')
<h1>Add New Item</h1>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="description">Description:</label>
    <textarea name="description" required></textarea>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>
    <button type="submit">Create</button>
</form>
@endsection