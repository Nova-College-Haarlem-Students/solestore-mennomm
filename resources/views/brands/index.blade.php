<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brands overzicht</title>
</head>

<body>
    <h1>brands overzicht</h1>

    @if($brands->isEmpty())
        <p>Geen brands gevonden.</p>
    @else
        <div class="brands-list">
            @foreach($brands as $brand)
                <div class="brand-item">
                    <h2>
                        <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a>
                    </h2>
                    <p>{{ $brand->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
</body>

</html>