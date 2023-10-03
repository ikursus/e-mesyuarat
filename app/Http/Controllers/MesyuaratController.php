<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('mesyuarat.template-senarai');
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

        dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
