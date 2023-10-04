@extends('layouts.induk')

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kemaskini Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Kemaskini Users</li>
        </ol>

        <form method="POST" action="{{ route('users.update', $user->id) }}">

        @csrf
        @method('PATCH')

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Kemaskini Users
                </div>
                <div class="card-body">

                    @include('layouts.alerts')

                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $user->name }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') ?? $user->email  }}">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') ?? $user->phone  }}">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" value="{{ old('password') }}">
                        <span class="text-muted">Biarkan kosong jika tidak mahu ubah password</span>
                    </div>

                    <div class="form-group">
                        <label>Password Confirmation</label>
                        <input type="text" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">

                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</main>
@endsection
