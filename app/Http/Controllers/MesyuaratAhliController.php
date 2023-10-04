<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MesyuaratAhliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $data = $request->validate([
            'user_id' => ['required', 'exists:users,id'] // validate data user wujud atau tidak dalam table users
        ]);

        // Attachkan data mesyuarat id ke $data
        $data['mesyuarat_id'] = $id;

        // Simpan data ke dalam table pivot mesyuarat_user
        DB::table('mesyuarat_user')->insert($data);

        return redirect()->back()->with('mesej-sukses', 'Ahli berjaya ditambah');
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
        //
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
