<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
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
    }
}
