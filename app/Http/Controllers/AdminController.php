<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use App\Models\Reporter;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Reporter::all(); // ambil dari tabel reporters
        return view('admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'lokasi' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'gambar' => 'nullable|image|max:2048',
        'status' => 'required|string|max:50',
    ]);

    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('images', 'public');
        $validatedData['gambar'] = $path;
    }

    Admin::create($validatedData);

    return redirect()->route('admin.index')->with('success', 'Data berhasil disimpan.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $report = Reporter::findOrFail($id);
        return view('admin.show', compact('report'));
    }

    public function verifikasi(Request $request, $id)
    {
        $report = Reporter::findOrFail($id);
        $report->status = $request->status; // "Diterima" atau "Ditolak"
        $report->save();

        return redirect()->route('admin.index')->with('success', 'Status laporan berhasil diperbarui!');
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
