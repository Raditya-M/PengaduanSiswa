<?php

namespace App\Http\Controllers;

use App\Models\Reporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ReporterController extends Controller
{
    // TAMPILKAN DAFTAR LAPORAN MILIK SISWA YANG LOGIN
    public function index()
    {
        $reports = Reporter::where('user_id', auth()->id())->latest()->get();
        return view('siswa.dashboard', compact('reports'));
    }

    // TAMPILKAN FORM BUAT LAPORAN
    public function create()
    {
        return view('siswa.create');
    }

    // SIMPAN LAPORAN BARU
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'waktu' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads', 'public');
        }

        Reporter::create([
            'user_id' => auth()->id(),
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'waktu' => $request->waktu,
            'gambar' => $path,
            'status' => 'Menunggu Verifikasi',
        ]);

        return redirect()->route('siswa.index')->with('success', 'Laporan berhasil ditambahkan!');
    }

    // DETAIL LAPORAN
    public function show($id)
    {
        $laporan = Reporter::where('user_id', auth()->id())->findOrFail($id);
        return view('siswa.show', compact('laporan'));
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
    public function destroy($id)
{
    $laporan = Reporter::findOrFail($id);

    // Hapus gambar kalau ada
    if ($laporan->gambar && Storage::exists('public/' . $laporan->gambar)) {
        Storage::delete('public/' . $laporan->gambar);
    }

    $laporan->delete();

    return redirect()->route('siswa.index')->with('success', 'Laporan berhasil dihapus.');
}

}
