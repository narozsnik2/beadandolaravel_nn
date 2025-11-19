<!DOCTYPE html>
<html>
<head>
    <title>Ételek listája</title>
</head>
<body>
    <h1>Ételek és hozzávalók</h1>
    @foreach($etelek as $etel)
        <h2>{{ $etel->nev }}</h2>
        <ul>
            @foreach($etel->hozzavalok as $hozzavalo)
                <li>{{ $hozzavalo->nev }}: {{ $hozzavalo->pivot->mennyiseg ?? '' }} {{ $hozzavalo->pivot->egyseg ?? '' }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>