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
                            <tr>
                                <td>CETAK</td>
                                <td>
                                    <a href="{{ route('mesyuarat.print.index', $mesyuarat->id) }}" class="btn btn-primary" target="_blank">Buka Di Browser</a>
                                    <a href="{{ route('mesyuarat.print.index', $mesyuarat->id) }}?jenis=download" class="btn btn-warning">Download PDF</a>
                                </td>
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

                <!-- Button trigger modal -->
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-ahli">Tambah Ahli</button>
                </div>

                <!-- Modal -->
                <form method="POST" action="{{ route('mesyuarat.ahli.store', $mesyuarat->id) }}">
                    @csrf
                    <div class="modal fade" id="tambah-ahli" tabindex="-1" aria-labelledby="tambah-ahliLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="tambah-ahliLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label>Ahli</label>
                                    <select class="form-control" name="user_id">
                                        <option value="">-- Sila Pilih --</option>

                                        @foreach ($senaraiAhli as $ahli)
                                        <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>


                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($senaraiAhliMesyuarat as $ahli)
                        <tr>
                            <td>{{ $ahli->id }}</td>
                            <td>{{ $ahli->ahli_name }}</td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $ahli->id }}">Keluarkan</button>

                                <!-- Modal Delete -->
                                <form method="POST" action="{{ route('mesyuarat.ahli.destroy', $mesyuarat->id) }}">

                                    @csrf
                                    @method('DELETE')

                                    <div class="modal fade" id="modal-delete-{{ $ahli->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Pengesahan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                Adakah anda bersetuju untuk menghapuskan data {{ $ahli->ahli_name }}
                                                <input type="hidden" name="user_id" value="{{ $ahli->user_id }}">
                                                <input type="hidden" name="mesyuarat_user_id" value="{{ $ahli->id }}">

                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Ya, Delete!</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </form>


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
