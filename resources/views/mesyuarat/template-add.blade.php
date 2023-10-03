@extends('layouts.induk')

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Maklumat Mesyuarat</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tambah Maklumat Mesyuarat</li>
        </ol>

        <form method="POST" action="{{ route('mesyuarat.store') }}">
        @csrf
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Maklumat Mesyuarat
                </div>
                <div class="card-body">

                    @include('layouts.alerts')

                    <div class="form-group">
                        <label>PERKARA</label>
                        <input type="text" name="perkara" class="form-control @error('perkara') is-invalid @enderror" value="{{ old('perkara') }}">
                        @error('perkara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>TARIKH MESYUARAT</label>
                        <input type="date" name="tarikh" class="form-control" value="{{ old('tarikh') }}">
                    </div>

                    <div class="form-group">
                        <label>MASA MULA</label>
                        <input type="time" name="masa_mula" class="form-control" value="{{ old('masa_mula') }}">
                    </div>

                    <div class="form-group">
                        <label>MASA TAMAT</label>
                        <input type="time" name="masa_tamat" class="form-control" value="{{ old('masa_tamat') }}">
                    </div>

                    <div class="form-group">
                        <label>LOKASI</label>
                        <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}">
                    </div>

                    <div class="form-group">
                        <label>AHLI TERLIBAT</label>
                        <input type="text" name="ahli" class="form-control" value="{{ old('ahli') }}">
                    </div>

                    <div class="form-group">
                        <label>STATUS</label>
                        <select name="status" class="form-control">
                            <option value="">-- Sila Pilih --</option>
                            <option value="aktif" @if (old('status') == 'aktif') selected @endif>AKTIF</option>
                            <option value="batal" {{ old('status') == 'batal' ? 'selected' : NULL }}>BATAL</option>
                            <option value="tunda" {{ old('status') == 'tunda' ? 'selected' : NULL }}>TUNDA</option>
                            <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : NULL }}>SELESAI</option>
                        </select>
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
