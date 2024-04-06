<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['menu'] = \App\Models\Menu::all();
        $data['judul'] = 'LIST MENU';
        $data['deskripsi'] = 'Berikut adalah Menu yang tersedia :';

        return view('menu_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['menu'] = new \App\Models\Menu();
        $data['route'] = 'menu.store';
        $data['method'] = 'post';
        $data['tombol'] = 'Simpan';
        $data['judul'] = 'Tambah Menu';
        $data['list_sp'] = [
            'Makanan' => 'Makanan',
            'Minuman' => 'Minuman'
        ];

        return view('menu_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:8048'
        ]);

        
        DB::beginTransaction();
        try{
            $menu = new \App\Models\Menu();

            if ($request->hasFile('gambar')) {
                //buang gambar dari validasi data
                unset($validasiData['gambar']);
                $path = $request->file('gambar')->store('public/gambar_menu');
                $menu->gambar = $path;
                
            }
            $menu->nama = $request->nama;
            $menu->jenis = $request->jenis;
            $menu->harga = $request->harga;
            $menu->save();
            DB::commit();
            flash('Data berhasil disimpan');
            return back();
        }catch (\Throwable $e) {
            DB::rollback();
            flash('Ops... Terjadi kesalahan,' . $e->getMessage())->error();
            return back();
        }
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
        $data['menu'] = \App\Models\Menu::findOrFail($id);
        $data['route'] = ['menu.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Perbarui';
        $data['judul'] = 'Edit Data menu';
        $data['list_sp'] = [
            'Makanan' => 'Makanan',
            'Minuman' => 'Minuman'
        ];
        return view('menu_form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:8048'
        ]);
        $menu = \App\Models\Menu::findOrFail($id);
        if ($request->hasFile('gambar')) {
            unset($validasiData['gambar']);
            $path = $request->file('gambar')->store('public/gambar_menu');
            $menu->gambar = $path;
        }
        $menu->fill($validasiData);
        $menu->save();

        flash('Data Berhasil Diperbarui');
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = \App\Models\Menu::findOrFail($id);
        $menu->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
