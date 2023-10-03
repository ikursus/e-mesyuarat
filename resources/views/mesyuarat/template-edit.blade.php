@extends('layouts.induk')

@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kemaskini Maklumat Mesyuarat</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Kemaskini Maklumat Mesyuarat</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Kemaskini Maklumat Mesyuarat
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label>PERKARA</label>
                    <input type="text" name="perkara" class="form-control">
                </div>

                <div class="form-group">
                    <label>TARIKH MESYUARAT</label>
                    <input type="date" name="tarikh" class="form-control">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
