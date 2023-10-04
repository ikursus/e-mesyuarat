<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $senaraiUsers = User::get();

        return view('users.template-senarai', compact('senaraiUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.template-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email:filter'],
            'phone' => ['nullable', 'sometimes'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);

        // Cara 1 untuk simpan data ke table users menggunakan Model
        // $user = new User;
        // $user->name = $data['name']; // $request->input('name')
        // $user->email = $data['email']; // $request->input('email')
        // $user->phone = $data['phone']; // $request->input('phone')
        // $user->password = $data['password']; // $request->input('password')
        // $user->save();

        // Cara 2 untuk simpan data ke table users menggunakan Model
        User::create($data);

        // Redirect ke halaman senarai mesyuarat selepas proses kemasukan data.
        return redirect()->route('users.index')->with('mesej-sukses', 'Rekod berjaya disimpan');
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
        $user = User::find($id);

        return view('users.template-edit', compact('user'));
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
