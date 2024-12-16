@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Inventory</h1>

    <!-- Menampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form untuk mengedit inventory -->
    <form action="{{ route('inventories.update', $inventory->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menggunakan PUT untuk update data -->

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $inventory->name }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $inventory->quantity }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $inventory->price }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Inventory</button>
        <a href="{{ route('inventories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
