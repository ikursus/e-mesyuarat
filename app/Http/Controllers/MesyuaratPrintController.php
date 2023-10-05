<?php

namespace App\Http\Controllers;

use App\Models\Mesyuarat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MesyuaratPrintController extends Controller
{
    public function index(Request $request, $id)
    {
        $mesyuarat = Mesyuarat::find($id);

        $pdf = Pdf::loadView('print.pdf-mesyuarat', compact('mesyuarat'));

        if ($request->has('jenis') && $request->input('jenis') == 'download')
        {

            return $pdf->download($mesyuarat->perkara . '.pdf');
        }

        return $pdf->stream();
    }
}
