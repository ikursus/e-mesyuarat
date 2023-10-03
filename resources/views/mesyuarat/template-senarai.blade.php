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
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PERKARA</th>
                            <th>TARIKH</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
