@extends('layouts.induk')

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Senarai Mesyuarat</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Senarai Mesyuarat</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Senarai Mesyuarat
            </div>
            <div class="card-body">

                @include('layouts.alerts')

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PERKARA</th>
                            <th>TARIKH</th>
                            <th>MASA MULA</th>
                            <th>MASA TAMAT</th>
                            <th>LOKASI</th>
                            <th>STATUS</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($senaraiMesyuarat as $mesyuarat)
                        <tr>
                            <td>{{ $mesyuarat->id }}</td>
                            <td>{{ $mesyuarat->perkara }}</td>
                            <td>{{ $mesyuarat->tarikh }}</td>
                            <td>{{ $mesyuarat->masa_mula }}</td>
                            <td>{{ $mesyuarat->masa_tamat }}</td>
                            <td>{{ $mesyuarat->lokasi }}</td>
                            <td>{{ $mesyuarat->status }}</td>
                            <td>
                                <a href="{{ route('mesyuarat.show', $mesyuarat->id) }}" class="btn btn-primary">Detail</a>
                                <a href="{{ route('mesyuarat.edit', $mesyuarat->id) }}" class="btn btn-warning">Edit</a>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
