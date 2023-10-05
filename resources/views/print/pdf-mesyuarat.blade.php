<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mesyuarat->perkara }}</title>
</head>
<body>

    <h1 style="text-align: center">NOTIS {{ $mesyuarat->perkara }}</h1>

    <p>Dimaklumkan mesyuarat berikut akan diadakan:</p>

    <ul>
        <li>PERKARA: {{ $mesyuarat->perkara }}</li>
        <li>TARIKH: {{ $mesyuarat->tarikh }}</li>
        <li>MASA: {{ $mesyuarat->masa_mula }} sehingga {{ $mesyuarat->masa_tamat }}</li>
        <li>LOKASI: {{ $mesyuarat->lokasi }}</li>
    </ul>

    <p>Kehadiran adalah diwajibkan</p>

    <p>Sekian terima kasih.</p>

</body>
</html>
