<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // view()
});

// Route untuk papar borang login
Route::get('/login', function() {

    return view('auth.login');

});
// Tamat route untuk papar borang login

// Route untuk terima data dari borang login
Route::post('/login', function() {
    return 'Anda berjaya login';
});
// Tamat route terima data dari borang login


Route::get('dashboard', function() {

    $senaraiPengguna = [
        // Pengguna 1
        [
            'id' => 1,
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'jawatan' => 'Pegawai IT',
            'telefon' => '0123456789',
            'status' => 'Aktif',
        ],
        // Pengguna 2
        [
            'id' => 2,
            'name' => 'Albab',
            'email' => 'albab@gmail.com',
            'jawatan' => 'Pegawai IT',
            'telefon' => '0123456789',
            'status' => 'Aktif',
        ],
        // Pengguna 3
        [
            'id' => 3,
            'name' => 'Siti',
            'email' => 'siti@gmail.com',
            'jawatan' => 'Pegawai IT',
            'telefon' => '0123456789',
            'status' => 'Aktif',
        ],
        // Pengguna 4
        [
            'id' => 4,
            'name' => 'Muthu',
            'email' => 'muthu@gmail.com',
            'jawatan' => 'Pegawai IT',
            'telefon' => '0123456789',
            'status' => 'Aktif',
        ],
        // Pengguna 5
        [
            'id' => 5,
            'name' => 'John Smith',
            'email' => 'john@gmail.com',
            'jawatan' => 'Pegawai IT',
            'telefon' => '0123456789',
            'status' => 'Aktif',
        ],
    ];

    // Cara 1 untuk attach data ke template
    // return view('template-dashboard')->with('senaraiPengguna', $senaraiPengguna);
    // Cara 2 untuk attach data ke template
    // return view('template-dashboard', ['senaraiPengguna' => $senaraiPengguna]);
    // Cara 3 untuk attach data ke template
    return view('template-dashboard', compact('senaraiPengguna'));
});


Route::get('mesyuarat', function() {
    return view('mesyuarat.template-senarai');
});

Route::get('mesyuarat/add', function() {
    return view('mesyuarat.template-add');
});
