<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sneakers overzicht</title>
</head>

<body>
    <h1>sneakers overzicht</h1>

    @if($sneakers->isEmpty())
        <p>Geen sneakers gevonden.</p>
    @else
        <div class="sneakers-list">
            @foreach($sneakers as $sneaker)
                <div class="sneaker-item">
                    <h2>
                        <a href="/sneakers/{{ $sneaker->id }}">{{ $sneaker->name }}</a>
                    </h2>
                    <p>{{ $sneaker->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
</body>

</html>