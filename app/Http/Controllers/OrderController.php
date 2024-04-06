<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['order'] = \App\Models\Order::all();
        $data['judul'] = 'ORDER';
        $data['deskripsi'] = 'List Order:';
        // $data['status'] = 'Diproses';

        return view('order_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['order'] = new \App\Models\Order();
        $data['route'] = 'order.store';
        $data['method'] = 'post';
        $data['tombol'] = 'Simpan';
        $data['judul'] = 'Tambah order';
        $data['list_menu'] = \App\Models\Menu::get();
        $data['list_pelanggan'] = \App\Models\Pelanggan::get();
        
        return view('order_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'menuid' => 'required',
            'jumlah' => 'required',
            'pelangganid' => 'required',   
        ]);

        $order = new \App\Models\Order();
        $order->fill($validasiData);
        $order->save();

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
        $data['order'] = \App\Models\Order::findOrFail($id);
        $data['route'] = ['order.update', $id];
        $data['method'] = 'put';
        $data['tombol'] = 'Perbarui';
        $data['judul'] = 'Edit Data order';
        $data['list_stat'] = [
            'Diproses' => 'Diproses',
            'Dalam Perjalanan'=>'Dalam Perjalanan',
            'Selesai' => 'Selesai'
        ];
        return view('order_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
             // 'menuid' => 'required',
             // 'jumlah' => 'required',
             // 'pelangganid' => 'required',
            'status' => 'required',
        ]);
        $order = \App\Models\Order::findOrFail($id);
        $order->fill($validasiData);
        $order->save();
        
        flash('Data Berhasil Diperbarui');
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = \App\Models\Order::findOrFail($id);
        $order->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
