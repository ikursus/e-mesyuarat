<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MesyuaratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function senarai()
    // {
    //     return view('mesyuarat.template-senarai');
    // }
    public function index()
    {
        $senaraiMesyuarat = DB::table('mesyuarat')->orderBy('id', 'desc')->get();

        // dd($senaraiMesyuarat);

        return view('mesyuarat.template-senarai', compact('senaraiMesyuarat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mesyuarat.template-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'perkara' => 'required|min:3|string', // cara 1 penyediaan validation rules - guna tiang
            'tarikh' => ['required', 'date'], // cara 2 penyediaan validation rules - guna array
            'masa_mula' => ['required', 'date_format:H:i'],
            'masa_tamat' => ['required'],
            'lokasi' => ['required'],
            'ahli' => ['required'],
            'status' => ['required', 'in:aktif,batal,tunda,selesai'],
        ]);

        // dd($data);
        // Simpan $data dari validation ke dalam table mesyuarat
        // Query Builder proses memasukkan data
        DB::table('mesyuarat')->insert($data);

        // Redirect ke halaman senarai mesyuarat selepas proses kemasukan data.
        return redirect()->route('mesyuarat.index')->with('mesej-sukses', 'Rekod berjaya disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mesyuarat = DB::table('mesyuarat')->where('id', '=', $id)->first(); // LIMIT 1

        return view('mesyuarat.template-detail', compact('mesyuarat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('mesyuarat.template-edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
