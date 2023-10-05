<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\MesyuaratUser;

class UserMesyuaratController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        // Cara 1 Masukkan rekod relation mesyuarat kepada user
        // MesyuaratUser::create([
        //     'mesyuarat_id' => $request->input('mesyuarat_id'), // $request->mesyuarat_id
        //     'user_id' => $id
        // ]);

        //Cara 2 - Menggunakan kaedah relation
        $user = User::find($id);
        $user->senaraiMesyuarat()->attach($request->input('mesyuarat_id'));

        return redirect()->back()->with('mesej-sukses', 'Mesyuarat berjaya didaftarkan kepada user ini');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // Cara 1 - Remove rekod relation mesyuarat daripada user
        // MesyuaratUser::where('mesyuarat_id', '=', $request->input('mesyuarat_id'))
        // ->where('user_id', '=', $id)
        // ->delete();

        // Cara 2 - Menggunakan kaedah relation
        $user = User::find($id);
        $user->senaraiMesyuarat()->detach($request->input('mesyuarat_id'));

        return redirect()->back()->with('mesej-sukses', 'Mesyuarat berjaya dikeluarkan daripada user ini');
    }
}
