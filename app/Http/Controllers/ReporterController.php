<?php

namespace App\Http\Controllers;

use App\Models\Reporter;
use Illuminate\Http\Request;

class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required|date',
        ]);

        Reporter::create([
            'user_id' => auth(),
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'waktu' => $request->waktu,
        ]);

        return redirect()->back()->with('success', 'Pelanggaran berhasil ditambahkan!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    // ambil data reporter berdasarkan id
    $laporan = Reporter::findOrFail($id);

    // kirim ke view siswa/show.blade.php
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
    public function destroy(string $id)
    {
        //
    }
}
