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

        // Dropdown pilihan senarai ahli
        $senaraiAhli = DB::table('users')->select('id', 'name')->get();

        // Senarai ahli yang telah berdaftar
        $senaraiAhliMesyuarat = DB::table('mesyuarat_user')
                                ->join('users', 'mesyuarat_user.user_id', '=', 'users.id')
                                ->where('mesyuarat_user.mesyuarat_id', '=', $id)
                                ->select('users.name As ahli_name', 'mesyuarat_user.id', 'mesyuarat_user.user_id')
                                ->get();

        return view('mesyuarat.template-detail', compact('mesyuarat', 'senaraiAhli', 'senaraiAhliMesyuarat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mesyuarat = DB::table('mesyuarat')->where('id', '=', $id)->first(); // LIMIT 1

        return view('mesyuarat.template-edit', compact('mesyuarat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'perkara' => 'required|min:3|string', // cara 1 penyediaan validation rules - guna tiang
            'tarikh' => ['required', 'date'], // cara 2 penyediaan validation rules - guna array
            'masa_mula' => ['required', 'date_format:H:i'],
            'masa_tamat' => ['required'],
            'lokasi' => ['required'],
            'status' => ['required', 'in:aktif,batal,tunda,selesai'],
        ]);

        DB::table('mesyuarat')->where('id', '=', $id)->update($data);

        // Redirect ke halaman senarai mesyuarat selepas proses kemaskini data.
        return redirect()->route('mesyuarat.index')->with('mesej-sukses', 'Rekod berjaya dikemaskini');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete rekod berdasarkan ID data
        DB::table('mesyuarat')->where('id', '=', $id)->delete();

        // Redirect ke halaman senarai mesyuarat selepas delete rekod.
        return redirect()->route('mesyuarat.index')->with('mesej-sukses', 'Rekod berjaya dihapuskan');
    }
}
