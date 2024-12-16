<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Vue Integration</title>
    <!-- Menambahkan CSS jika ada (contoh menggunakan app.css yang dihasilkan oleh Laravel Mix) -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Div ini akan menjadi tempat mount Vue app -->
    <div id="app"></div>

    <!-- Menambahkan script app.js yang dihasilkan oleh Laravel Mix -->
    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
