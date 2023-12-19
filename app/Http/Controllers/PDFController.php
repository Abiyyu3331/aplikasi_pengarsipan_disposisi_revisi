<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disposisi;
use PDF;

class PDFController extends Controller
{
    public function cetakPDF(Disposisi $disposisi)
    {
        // $disposisi = Disposisi::findOrFail($no_surat); // Gantilah Disposisi dengan model yang sesuai

        $pdf = PDF::loadView('pdf.lampiran');

        return $pdf->download('disposisi.pdf');
    }
}
