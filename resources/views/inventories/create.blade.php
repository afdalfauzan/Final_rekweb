<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Inventory</title>
</head>
<body>
    <h1>Create Inventory Item</h1>

    <form action="{{ url('inventories') }}" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="quantity">Quantity:</label><br>
        <input type="number" name="quantity" required><br><br>

        <label for="price">Price:</label><br>
        <input type="number" name="price" required><br><br>

        <button type="submit">Save</button>
    </form>

</body>
</html>
