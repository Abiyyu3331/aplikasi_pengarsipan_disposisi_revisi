<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disposisi;
use PDF;

class ExportPDFController extends Controller
{
    public function exportPDF()
    {
        $disposisi = Disposisi::all();

        $pdf = PDF::loadView('pdf.disposisi', compact('disposisi'));

        return $pdf->download('disposisi.pdf');
    }
}
