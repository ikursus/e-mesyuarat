@extends('layouts.induk')

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Senarai Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Senarai Users</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Senarai Users
            </div>
            <div class="card-body">

                @include('layouts.alerts')

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>TINDAKAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($senaraiUsers as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Detail</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $user->id }}">Delete</button>

                                <!-- Modal Delete -->
                                <form method="POST" action="{{ route('users.destroy', $user->id) }}">

                                    @csrf
                                    @method('DELETE')

                                    <div class="modal fade" id="modal-delete-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Pengesahan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Adakah anda bersetuju untuk menghapuskan data {{ $user->perkara }}
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
