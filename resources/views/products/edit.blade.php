@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Edit Product</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="detail">Product Detail:</label>
            <textarea name="detail" class="form-control" required>{{ $product->detail }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" height="50" width="50" >
            <input type="file" name="image" >
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection