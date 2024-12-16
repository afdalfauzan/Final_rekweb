<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory List</title>
    <!-- Optional: Link to a CSS framework like Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Inventory List</h1>

        <!-- Table to display the inventory items -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventories as $inventory)
                    <tr>
                        <th scope="row">{{ $inventory->id }}</th>
                        <td>{{ $inventory->name }}</td>
                        <td>{{ $inventory->quantity }}</td>
                        <td>{{ number_format($inventory->price, 2) }}</td>
                        <td>
                            <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Link to add a new inventory item -->
        <div class="text-center mt-3">
            <a href="{{ route('inventories.create') }}" class="btn btn-success">Add New Item</a>
        </div>
    </div>

    <!-- Optional: Link to Bootstrap JS for interactivity like modals and dropdowns -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
