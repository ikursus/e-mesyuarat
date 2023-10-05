<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jemputan Mesyuarat</title>
</head>
<body>

<p>Salam sejahtera {{ $user->name }},</p>

<p>Anda dijemput untuk menghadiri ke Mesyuarat berikut:</p>

<ul>
    <li>Perkara: {{ $mesyuarat->perkara }}</li>
    <li>Tarikh: {{ $mesyuarat->tarikh }}</li>
    <li>Masa: {{ $mesyuarat->masa_mula }} - {{ $mesyuarat->masa_mula }}</li>
</ul>

<p>Kehadiran Tn/Pn amatlah dihargai.</p>

<p>Sekian, terima kasih.</p>

<p>{{ config('app.name') }}</p>
</body>
</html>
