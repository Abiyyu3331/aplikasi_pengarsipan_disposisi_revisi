<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suratmasuk;
use App\Models\Disposisi;
use PDF;
use Illuminate\Support\Facades\Storage;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disposisi = Disposisi::all();
        $suratmasuk = Suratmasuk::all();
        return view('suratmasuk.index', compact('suratmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Disposisi $disposisis)
    {
        $disposisis = Disposisi::all();
        return view('suratmasuk.create')->with('disposisis', $disposisis);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Suratmasuk $suratmasuk)
    {
        //
        $request->validate([
            'no_agenda' => 'required',
            'jenis_surat' => 'required',
            'tanggal_kirim' => 'required',
            'tanggal_terima' => 'required',
            'no_surat' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required',
            'surat_masuk' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);     

        $file = $request->file('surat_masuk');
        $path = $file->store('surat_masuk'); // menyimpan file di dalam direktori storage/app/surat_masuk

        $suratmasuk = new Suratmasuk;

        $suratmasuk->no_agenda = $request->no_agenda;
        $suratmasuk->jenis_surat = $request->jenis_surat;
        $suratmasuk->tanggal_kirim = $request->tanggal_kirim;
        $suratmasuk->tanggal_terima = $request->tanggal_terima;
        $suratmasuk->no_surat = $request->no_surat;
        $suratmasuk->pengirim = $request->pengirim;
        $suratmasuk->perihal = $request->perihal;

        if ($request->hasFile('surat_masuk')) {
            $file = $request->file('surat_masuk');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/surat_masuk', $filename);
            $suratmasuk->surat_masuk = $filename;
        }

        $suratmasuk->save();

        return redirect()->route('suratmasuk.index')->with('success', 'Surat masuk berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,Suratmasuk $suratmasuk)
    {
        // dd($id);
        // $suratmasuk = Suratmasuk::find($id);
        // dd($suratmasuk);
        // if (!$suratmasuk) {
        //     abort(404);
        // }

        // Ambil path atau nama file dari kolom surat_masuk
        $filePath = $suratmasuk->surat_masuk;

        // Lakukan validasi apakah file ada
        if (Storage::exists($filePath)) {
            // Jika file ada, tampilkan file PDF
            return response()->file(storage_path('app/' . $filePath));
        } else {
            // Jika file tidak ditemukan, tampilkan error atau kembalikan respons yang sesuai
            abort(404);
        }

        return view('suratmasuk.show', compact('suratmasuk'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suratmasuk $suratmasuk)
    {
        $disposisis = Disposisi::all();
        return view('suratmasuk.edit', compact('suratmasuk', 'disposisis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suratmasuk $suratmasuk)
    {
        //
        $request->validate([
            'no_agenda' => 'required',
            'jenis_surat' => 'required',
            'tanggal_kirim' => 'required',
            'tanggal_terima' => 'required',
            'no_surat' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required'
        ]);

        $suratmasuk->update($request->all());

        return redirect()->route('suratmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suratmasuk $suratmasuk)
    {
        //
        $suratmasuk = Suratmasuk::where('id', $suratmasuk->id)->delete();
        return redirect()->route('suratmasuk.index');

    }
}
