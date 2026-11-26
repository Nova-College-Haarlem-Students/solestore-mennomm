<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $sneaker->name }}</title>
</head>
<body>
    <h1>{{ $sneaker->name }}</h1>
    <p>{{ $sneaker->colorway }}</p>
    <p>{{ $sneaker->release_year }}</p>
    <p>{{ $sneaker->description }}</p>

    <a href="/sneakers">← Terug naar alle categorieën</a>
</body>
</html>