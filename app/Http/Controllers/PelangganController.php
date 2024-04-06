<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pelanggan'] = \App\Models\Pelanggan::all();

        return view('pelanggan_index', $data);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pelanggan'] = new \App\Models\Pelanggan();
        $data['route'] = 'pelanggan.store';
        $data['method'] = 'post';
        $data['tombol'] = 'Simpan';
        $data['judul'] = 'Tambah Info';
    
        return view('pelanggan_form', $data);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama' => 'required',
            'nomorhp' => 'required',
            'alamat' => 'required',
        ]);

        $pelanggan = new \App\Models\Pelanggan();
        $pelanggan->fill($validasiData);
        $pelanggan->save();

        flash('Data Berhasil Disimpan');
        return back();
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
        $data['pelanggan'] = \App\Models\Pelanggan::findOrFail($id);
        $data['route'] = ['pelanggan.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Perbarui';
        $data['judul'] = 'Edit Data pelanggan';
        return view('pelanggan_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'nama' => 'required',
            'nomorhp' => 'required',
            'alamat' => 'required',
        ]);
        $pelanggan = \App\Models\Pelanggan::findOrFail($id);
        $pelanggan->fill($validasiData);
        $pelanggan->save();

        flash('Data Berhasil Diperbarui');
        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = \App\Models\Pelanggan::findOrFail($id);
        $pelanggan->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
