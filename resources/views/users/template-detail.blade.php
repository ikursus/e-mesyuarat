@extends('layouts.induk')

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Maklumat User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Maklumat User</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Maklumat User - {{ $user->name }}
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
                                <td>NAMA</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>PHONE</td>
                                <td>{{ $user->phone }}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>


            </div>
        </div>

        <div class="card mt-4 mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Maklumat Mesyuarat Terlibat
            </div>
            <div class="card-body">

                <!-- Button trigger modal -->
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-ahli">Daftarkan Mesyuarat</button>
                </div>

                <!-- Modal -->
                <form method="POST" action="{{ route('mesyuarat.ahli.store', $user->id) }}">
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

                                        {{-- @foreach ($senaraiAhli as $ahli)
                                        <option value="{{ $ahli->id }}">{{ $ahli->name }}</option>
                                        @endforeach --}}
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
                            <th>MESYUARAT</th>
                            <th>TINDAKAN</th>
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
