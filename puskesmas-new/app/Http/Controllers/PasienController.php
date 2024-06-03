<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiens = pasien::all();
        return view('admin.pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'kelurahan_nama' => 'required|string'
        ]);

        Pasien::create($validated);
        return redirect('admin2/pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'kelurahan_nama' => 'required|string'
        ]);

        $pasien = Pasien::find($id);
        $pasien->update($validated);

        return redirect('admin2/pasien')->with('pesan', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect("admin2/pasien")->with('pesan', 'Data Berhasil di Hapus');
    }
}
