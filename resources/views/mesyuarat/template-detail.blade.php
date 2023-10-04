@extends('layouts.induk')

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Maklumat Mesyuarat</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Maklumat Mesyuarat</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Maklumat Mesyuarat - {{ $mesyuarat->perkara }}
            </div>
            <div class="card-body">

                @include('layouts.alerts')

                <div class="table-responsive">
                    <table class="table">

                        <thead>
                            <tr>
                                <th>PERKARA</th>
                                <th>BUTIRAN</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>PERKARA</td>
                                <td>{{ $mesyuarat->perkara }}</td>
                            </tr>
                            <tr>
                                <td>TARIKH</td>
                                <td>{{ $mesyuarat->tarikh }}</td>
                            </tr>
                            <tr>
                                <td>MASA MULA</td>
                                <td>{{ $mesyuarat->masa_mula }}</td>
                            </tr>
                            <tr>
                                <td>MASA TAMAT</td>
                                <td>{{ $mesyuarat->masa_tamat }}</td>
                            </tr>
                            <tr>
                                <td>LOKASI</td>
                                <td>{{ $mesyuarat->lokasi }}</td>
                            </tr>
                            <tr>
                                <td>STATUS</td>
                                <td>{{ $mesyuarat->status }}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>


            </div>
        </div>

        <div class="card mt-4 mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Maklumat Ahli Terlibat
            </div>
            <div class="card-body">

                @include('layouts.alerts')

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Tambah Ahli</button>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
