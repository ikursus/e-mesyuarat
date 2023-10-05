<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mesyuarat;
use Illuminate\Http\Request;
use App\Mail\JemputanMesyuarat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MesyuaratAhliController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $data = $request->validate([
            'user_id' => ['required', 'exists:users,id'] // validate data user wujud atau tidak dalam table users
        ]);

        // buat semakan manual untuk pastikan user yang sama tidak lagi dimasukkan ke mesyuarat yang sama
        $semakKewujudanAhli = DB::table('mesyuarat_user')
                                ->where('mesyuarat_id', '=', $id)
                                ->where('user_id', '=', $data['user_id'])
                                ->count();

        // Jika rekod user yang ingin dimasukkan kedalam meeting ini telahpun wujud, maka tolak kemasukan.
        if ($semakKewujudanAhli > 0)
        {
            return redirect()->back()->with('mesej-gagal', 'Rekod ahli telah pun wujud dalam mesyuarat ini');
        }

        // Attachkan data mesyuarat id ke $data
        $data['mesyuarat_id'] = $id;

        // Simpan data ke dalam table pivot mesyuarat_user
        DB::table('mesyuarat_user')->insert($data);

        // Dapatkan maklumat mesyuarat
        $mesyuarat = Mesyuarat::find($id);
        $user = User::find($data['user_id']);

        // Hantar Email maklumat jemputan mesyuarat kepada user
        // Mail::to($user->email)->send(new JemputanMesyuarat($user, $mesyuarat));
        Mail::to($user->email)->queue(new JemputanMesyuarat($user, $mesyuarat));

        return redirect()->back()->with('mesej-sukses', 'Ahli berjaya ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // $ahliUntukDelete = DB::table('mesyuarat_user')
        //                     ->where('mesyuarat_id', '=', $id)
        //                     ->where('user_id', '=', $request->input('user_id'))
        //                     ->delete();
        $ahliUntukDelete = DB::table('mesyuarat_user')
                            ->where('id', '=', $request->input('mesyuarat_user_id'))
                            ->delete();

        return redirect()->back()->with('mesej-sukses', 'Ahli berjaya dikeluarkan');
    }
}
